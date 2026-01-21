<?php

namespace App\Listeners;

use App\Events\OrderCreated;

class SendOrderEmail
{
    public function handle(OrderCreated $event): void
    {
        logger('📧 Email sent for order ID: ' . $event->order->id);
    }
}