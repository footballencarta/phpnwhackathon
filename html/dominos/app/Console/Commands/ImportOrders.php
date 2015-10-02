<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class ImportOrders extends Command {
    protected $name = 'dominos:importorders';
    protected $description = 'Imports Orders';

    public function fire()
    {
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
    }
}
