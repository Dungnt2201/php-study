<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SendWelcomeNotification
{
    public function __construct()
    {
        //
    }

    public function handle(UserRegistered $event)
    {
        // Ghi log khi user đăng ký
        Log::info('User vừa đăng ký: ' . $event->user->email);
    }
}
