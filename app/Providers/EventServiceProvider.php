<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        \App\Events\OrderCreated::class => [
            \App\Listeners\SendOrderEmail::class,
            \App\Listeners\LogOrderCreated::class,
        ],
    ];

    public function boot(): void
    {
        //
    }
}