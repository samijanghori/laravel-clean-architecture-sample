<?php

namespace App\Listeners;

use App\Events\OrderCreated;

class LogOrderCreated
{
    public function handle(OrderCreated $event): void
    {
        logger('📝 Order created: ID=' . $event->order->id . ', Amount=' . $event->order->amount);
    }
}