<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $notifications = $user->notifications()->where('is_read', false)->get();
        
        return view('notifications.index', compact('notifications'));
    }

    public function show($id)
    {
        $user = Auth::user();
        $notification = $user->notifications()->findOrFail($id);

        // Mark as read
        $notification->is_read = true;
        $notification->save();

        return view('notifications.show', compact('notification'));
    }
}
