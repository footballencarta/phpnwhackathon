<?php

namespace App\Console;

use DB;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\Inspire::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule) {
        $schedule->call(function () {
          $i = 126468860;

          while ($i < PHP_INT_MAX) {
            $json = json_decode(file_get_contents('https://www.dominos.co.uk/Questionnaire/GetPizzaTrackerStatus?orderId=' . $i));

            print $i . PHP_EOL;

            if($json->step1Css != 'is-step-in-progress') {
              continue;
              // Store as network
              app('db')->insert('insert into pizza (order_id, current_order_status, created_at, updated_at) values (?, ?, NOW(), NOW())', [$i, 1]);
            }

            $i++;
          }

          print "done with nowt :(";
        })->everyMinute()->withoutOverlapping();
    }
}
