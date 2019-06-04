<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\CertificatesExpiring;
use App\Certificate;

class UpdateStateCommand extends Command{

    private $expiring = [];

   /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'certificates:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Run this command to update the state of the certificates in the database";
    
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

     /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

      Certificate::chunkById(10, function($items){
          foreach($items as $item){
            if($this->isValidItem($item)) 
              $this->process($item);
          }
        });

      $this->sendExpiringMail();

    }


    private function process(Certificate $item){
      
      $item = $this->tweakPermanentItems($item);

      $future = Carbon::today()->add('3', 'month');
      $expiry = Carbon::createFromFormat('Y-m-d', $item->expiry);
      $monthsToExpiry = Carbon::today()->diffInMonths($expiry, false);

      if($monthsToExpiry >= 0 && $monthsToExpiry < 3){
        $this->expiring[] = $item;
        $this->moveToState($item, 'EXPIRING');
      }
      else if( $monthsToExpiry > 2 ){
        $this->moveToState($item, 'HEALTHY');
      }
      else if ( $monthsToExpiry < 0 ){
        $this->moveToState($item, 'EXPIRED');
      }

    }

    private function sendExpiringMail(){
      Mail::to(['oyekunmi@gmail.com','captmodey@yahoo.com','captainmodey@gmail.com'])->send(new CertificatesExpiring($this->expiring));
    }

    private function moveToState($item, String $nextState){
      if($item->state == $nextState) return ;

      DB::table($this->tableName)
        ->where('id', $item->id)
        ->update(['state'=> $nextState]);
    }

    private function isValidItem($item){
      return  
        (is_null($item->expiry) && $item->renewals == 'permanent') ||
        !is_null($item->expiry);
    }

    private function tweakPermanentItems($item){
      if($item->renewals != 'permanent')
        return $item;

      $item->expiry = Carbon::today()->addYears(5)->toDateString();

      return $item;
    }

}