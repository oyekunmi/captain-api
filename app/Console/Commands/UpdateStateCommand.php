<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UpdateStateCommand extends Command{

    private $tableName = 'certificates';

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

      DB::table($this->tableName)
        // ->whereIn('state', ['HEALTHY', 'EXPIRING'])
        ->chunkById(10, function($items){
          foreach($items as $item){
            $this->process($item);
          }
        });
    }


    private function process($item){
      
      $future = Carbon::today()->add('3', 'month');
      $expiry = Carbon::createFromFormat('Y-m-d', $item->expiry);

      $monthsToExpiry = Carbon::now()->diffInMonths($expiry, false);

      if($monthsToExpiry >= 0 && $monthsToExpiry < 3){
        $this->moveToState($item, 'EXPIRING');
      }
      else if( $monthsToExpiry > 2 ){
        $this->moveToState($item, 'HEALTHY');
      }
      else if ( $monthsToExpiry < 0 ){
        $this->moveToState($item, 'EXPIRED');
      }

    }

    private function moveToState($item, String $nextState){
      if($item->state == $nextState) return ;

      DB::table($this->tableName)
        ->where('id', $item->id)
        ->update(['state'=> $nextState]);
    }

}