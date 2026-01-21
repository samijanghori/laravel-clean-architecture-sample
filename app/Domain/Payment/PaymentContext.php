<?php
namespace App\Domain\Payment;
 
use App\Domain\Payment\Contracts\PaymentStrategy;

class PaymentContext
{
    public function __construct(private PaymentStrategy $strategy)
    {}
    public function execute(int $amount) : string 
    {
        return $this->strategy->pay($amount);
    }
}