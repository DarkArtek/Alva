<?php

namespace Modules\Alva\Providers;

use App\Events\TestEvent;
use Modules\Alva\Listeners\TestEventListener;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        TestEvent::class => [TestEventListener::class]
    ];

    public function boot()
    {
        parent::boot();
    }
}
