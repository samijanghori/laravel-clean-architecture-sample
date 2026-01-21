<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PaymentService;
use App\Domain\Order\OrderRepository;
use App\Events\OrderCreated;
use App\Http\Requests\StoreOrderRequest;


class OrderController extends Controller
{
    public function __construct(
        private OrderRepository $orders,
        private PaymentService $paymentService
    ) {}

    public function create()
    {
        return view('order.create');
    }

    public function store(StoreOrderRequest $request)
    {
        // 1. اعتبارسنجی
         $validated = $request->validated();

        // 2. پرداخت
        $paymentResult = $this->paymentService->process(
            $request->payment_method,
            $request->amount
        );

        // 3. ذخیره سفارش
        $order = $this->orders->create([
            'amount' => $request->amount,
            'payment_method' => $request->payment_method,
        ]);

        // 4. ارسال Event
        event(new OrderCreated($order));

        // 5. نمایش نتیجه
        return [
            'order' => $order,
            'payment' => $paymentResult,
        ];
    }
}