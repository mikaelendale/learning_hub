<?php

namespace App\Http\Controllers;

use App\Notifications\TestNotification;
use Illuminate\Support\Facades\Auth;

class ExampleController extends Controller
{
    public function sendNotification()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Send the notification
        $user->notify(new TestNotification());

        return 'Notification sent!';
    }
}
