<?php

namespace App\Listeners;

use App\Events\RecetteCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendRecetteCreatedNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the given event.
     */
    public function handle(RecetteCreated $event): void
    {
        // $recetteCreated = $event->recette;
        dd($event);
    }
}
