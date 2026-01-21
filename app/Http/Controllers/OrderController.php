<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Domain\Order\OrderRepository;
use App\Domain\Payment\PaymentContext;
use App\Domain\Payment\Strategies\OnlinePayment;
use App\Domain\Payment\Strategies\CashPayment;

class OrderController extends Controller
{
    public function __construct(private OrderRepository $orders)
    {

    }

    public function create()
    {
        return view('order.create');
    }
    public function store(Request $request)
    {
        $strategy = match ($request->payment_method) {
           'online'  => new OnlinePayment() ,
            'cash' =>  new CashPayment(),
        };
        $payment = new PaymentContext($strategy);
        $paymentResult = $payment->execute($request->amount);


        $order = $this->orders->create([
            'amount' => $request->amount,
            'payment_method' => $request->payment_method,]);
            return [
                'order' => $order,
                'payment' => $paymentResult,
            ];
    }
    }
