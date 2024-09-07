<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class TimeController extends Controller
{
    public function showTimer()
    {
        // Fetch the student's time_duration and registration date
        $student = Auth::user();
        $registrationDate = $student->created_at; // Assuming created_at is the start date
        $timeDuration = $student->time_duration; // Fetch the time duration for the student

        // Calculate the end date based on the time_duration
        $endDate = Carbon::parse($registrationDate)->addDays($timeDuration);
        $remainingTime = $endDate->diffForHumans(Carbon::now(), true); // Time remaining as human readable

        // Determine if access should be restricted
        $accessRestricted = Carbon::now()->greaterThanOrEqualTo($endDate);

        // Pass the remaining time and access status to the view
        return view('layouts.timer', [
            'remainingTime' => $remainingTime,
            'accessRestricted' => $accessRestricted,
        ]);
    }
}
