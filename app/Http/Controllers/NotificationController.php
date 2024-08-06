<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    public function update(Request $request)
    {
        $user = Auth::user();
        $user->notification = $request->input('notification');
        $user->save();

        return response()->json(['success' => true]);
    }
}
