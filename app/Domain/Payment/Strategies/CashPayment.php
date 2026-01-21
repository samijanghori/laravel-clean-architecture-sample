<?php
namespace App\Domain\Payment\Strategies;

use App\Domain\Payment\Contracts\PaymentStrategy;

class CashPayment implements PaymentStrategy
{
    public function pay(int $amount) : string 
    {
        return "Paid by Cash : $amount";
    }
}