<?php

namespace App\Broadcasting;

use App\Notifications\TestNotification;
use App\User;

class TestChannel
{
    /**
     * Create a new channel instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Authenticate the user's access to the channel.
     *
     * @param  \App\User  $user
     * @return array|bool
     */
    public function join(User $user)
    {
        //
    }

    public function send($notifiable, TestNotification $notification)
    {
        $message = $notification->toTest($notifiable);

        // Send notification to the $notifiable instance...
    }
}
