<?php
namespace App\Domain\Payment\Contracts;

interface PaymentStrategy
{
    public function pay(int $amount) : string;
}