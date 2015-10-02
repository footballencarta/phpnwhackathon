<?php namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use App\Models\Pizza;
use App\Transformers\OrderTransformer;
use Carbon\Carbon;

class OrderController extends BaseController {
  protected $pizza;

  function __construct(Pizza $pizza) {
      $this->pizza = $pizza;
  }

  public function index(Manager $fractal, OrderTransformer $orderTransformer) {
    $orders = $this->pizza->where('current_order_status', '<', 5)->orderBy('current_order_status', 'desc')->get();

    $collection = new Collection($orders, $orderTransformer);

    $data = $fractal->createData($collection)->toArray();

    return $data;
  }

  public function avgwait() {
      $orders = $this->pizza->where('current_order_status', '=', 5)->get();

      if(empty($orders->toArray())) {
        return [
          'data' => [
            'time' => 0
          ]
        ];
      }

      $average = [];

      foreach($orders as $order) {
        $start = Carbon::parse($order->created_at);
        $end   = Carbon::parse($order->updated_at);

        $average[] = $start->diffInMinutes($end);
      }

      return [
        'data' => [
          'time' => ceil(array_sum($average) / count($average))
        ]
      ];
  }
}
