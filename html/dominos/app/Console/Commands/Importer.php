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
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
          $i = 126466800;

          while ($i < PHP_INT_MAX) {
            $json = json_decode(file_get_contents('https://www.dominos.co.uk/Questionnaire/GetPizzaTrackerStatus?orderId=' . $i));

            print $i . PHP_EOL;

            if($json->step1Css == 'is-step-in-progress') {
              print '1 ' . $json->orderStage . PHP_EOL;
            }

            if($json->step2Css == 'is-step-in-progress') {
              print '2 ' . $json->orderStage . PHP_EOL;
            }

            if($json->step3Css == 'is-step-in-progress') {
              print '3 ' . $json->orderStage . PHP_EOL;
            }

            if($json->step4Css == 'is-step-in-progress') {
              print '4 ' . $json->orderStage . PHP_EOL;
            }

            if($json->step5Css == 'is-step-in-progress') {
              print '5 ' . $json->orderStage . PHP_EOL;
            }

            $i++;
          }

          print "done with nowt :(";
        })->everyMinute()->withoutOverlapping();
    }
}
