<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckStudentStatus
{
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if ($user) {
            // Check if the user's status is not approved
            if ($user->status !== 'approved') {
                // Allow only dashboard access if status is not approved
                if ($request->path() !== 'dashboard') {
                    return redirect()->route('dashboard')->with('status', 'Your access is restricted until your status is approved.');
                }
            }
        }

        return $next($request);
    }
}
