<?php

namespace App\Listeners;

use App\Events\MemberCreated;
use App\Mail\MemberWelcomeMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendWelcomeMail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(MemberCreated $event): void
    {
        Mail::to($event->member->email)->send(
            new MemberWelcomeMail($event->member)
        );
    }
}
