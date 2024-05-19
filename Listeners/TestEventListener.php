<?php

namespace Modules\Alva\Listeners;

use App\Events\TestEvent;
use Illuminate\Support\Facades\Log;

class TestEventListener
{
    /**
     * Handle the event
     *
     * @param \App\Events\TestEvent $event
     */
    public function handle(TestEvent $event)
    {
        Log::info('Received Event', [$event]);
    }
}
