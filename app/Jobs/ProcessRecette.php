<?php

namespace App\Jobs;

use App\Models\Recette;
use App\Services\RecetteProcessor;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Jobs\Middleware\RateLimited;

// Podcast => Recette

class ProcessRecette implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(
        public Recette $recette,
    ) {
    }

    /**
     * Execute the job.
     */
    public function handle(RecetteProcessor $processor): void
    {
        // Process uploaded recette...
    }

    /**
     * Get the middleware the job should pass through.
     *
     * @return array<int, object>
     */
    public function middleware(): array
    {
        return [new RateLimited];
    }
}