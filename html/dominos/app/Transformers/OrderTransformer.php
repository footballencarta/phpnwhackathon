<?php namespace App\Transformers;

use App\Models\Pizza;
use League\Fractal\TransformerAbstract;
use Carbon\Carbon;

class OrderTransformer extends TransformerAbstract {
    public function transform(Pizza $pizza)
    {
        return [
            'order_id'      => (int) $pizza->order_id,
            'order_status'  => $this->processOrderStatus($pizza->current_order_status),
            'updated'       => Carbon::parse($pizza->updated_at)->diffForHumans()
        ];
    }

    protected function processOrderStatus($orderStatus)  {
      switch($orderStatus) {
        case 1:
          return 'Order Placed';
        case 2:
          return 'Prep';
        case 3:
          return 'Bake';
        case 4:
          return 'Quality Control';
        case 5:
          return 'Delivery/Collection';
        default:
          return 'Unknown';
      }
    }
}
