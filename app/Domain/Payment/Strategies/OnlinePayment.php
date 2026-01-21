<?php
namespace App\Domain\Payment\Strategies;

use App\Domain\Payment\Contracts\PaymentStrategy;

class OnlinePayment implements PaymentStrategy
{
    public function pay(int $amount) : string 
    {
        return "Payed Online: $amount";
    }
}