<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Events\RecetteCreated;
use App\Listeners\SendRecetteCreatedNotification;
use Illuminate\Support\Facades\Event;

class RecetteProcessor extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    /**
     * Register any other events for your application.
     */
    public function boot(): void
    {
        Event::listen(
            RecetteCreated::class,
            SendRecetteCreatedNotification::class,
        );

        Event::listen(function (RecetteCreated $event) {
            // ...
        });

        Event::listen('event.*', function (string $eventName, array $data) {
            // ...
        });
    }
}
