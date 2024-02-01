<?php

namespace App\Listeners;

use App\Events\testEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class testEventListener implements ShouldQueue
{
    use InteractsWithQueue;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        dd("in");
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\testEvent  $event
     * @return void
     */
    public function handle(testEvent $event)
    {
       echo $event->msg;
    }
}
