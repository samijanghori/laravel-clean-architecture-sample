<?php

namespace App\Services;

use App\Domain\Payment\PaymentContext;
use App\Domain\Payment\Strategies\OnlinePayment;
use App\Domain\Payment\Strategies\CashPayment;

class PaymentService
{
    public function process(string $method, int $amount): string
    {
        $strategy = match ($method) {
            'online' => new OnlinePayment(),
            'cash'   => new CashPayment(),
            default  => throw new \InvalidArgumentException('Invalid payment method'),
        };

        $payment = new PaymentContext($strategy);
        return $payment->execute($amount);
    }
}