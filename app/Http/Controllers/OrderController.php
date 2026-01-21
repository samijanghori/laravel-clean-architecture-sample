<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Domain\Order\OrderRepository;

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
        $order = $this->orders->create(['amount' => $request->amount,
            'payment_method' => $request->payment_method,]);
            return $order;
    }
    }
