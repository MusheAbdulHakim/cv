<?php

namespace App\Listeners;

use App\Models\User;
use App\Events\SendContactNotification;
use App\Notifications\ContactMessage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactMessageListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(SendContactNotification $event)
    {
        $users = User::get();
        foreach($users as $user){
            $user->notify(new ContactMessage($event->data));
        }
    }
}
