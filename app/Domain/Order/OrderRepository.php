<?php

namespace App\Domain\Order;
use App\Models\Order;

class OrderRepository
{
    public function create(array $data) : Order
    {
        return Order::create($data);
    }
}
