<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UpdateStateCommand extends Command{
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
      $tableName = 'certificates';

      DB::table($tableName)
        // ->whereIn('state', ['HEALTHY', 'EXPIRING'])
        ->chunkById(10, function($items){
          foreach($items as $item){
            $this->process($item);
          }
        });
    }


    private function process($item){
      // DB::table($tableName)
      //   ->where('id', $item->id)
      //   ->update(['state'=>'EXPIRED']);
      
      $future = Carbon::today()->add('3', 'month');
      $expiry = Carbon::createFromFormat('Y-m-d', $item->expiry);

      $monthsToExpiry = Carbon::now()->diffInMonths($expiry);
      $this->info($monthsToExpiry);

      if($monthsToExpiry >= 0 && $monthsToExpiry < 3){
        $this->info('EXPIRING');
      }
      else if( $monthsToExpiry > 2 ){
        $this->info('HEALTHY');
      }
      else if ( $monthsToExpiry < 0 ){
        $this->info('EXPIRED');
      }

    }

}