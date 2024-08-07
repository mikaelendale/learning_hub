<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function showNotifications()
    {
        $user = Auth::user(); // Get the authenticated user
        $notifications = $user->notifications; // Fetch notifications

        return view('layouts.header', compact('notifications')); // Pass notifications to the view
    }
}
