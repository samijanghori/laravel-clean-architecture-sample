<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'amount' => 'required|integer|min:1000',
            'payment_method' => 'required|in:online,cash',
        ];
    }

    public function messages(): array
    {
        return [
            'amount.min' => 'at least 10 dollar',
            'payment_method.in' => 'payment method could be by cash or online',
        ];
    }
}