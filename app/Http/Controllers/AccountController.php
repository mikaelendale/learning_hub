<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index(Request $request)
    {
        // Fetch the student's class and time duration data
        $student = $request->user();
        $classAttended = $student->class_attended; // Beginner, Intermediate, Advanced
        $timeDuration = $student->time_duration;   // End date of the subscription (datetime)

        // Calculate remaining time
        $remainingDays = Carbon::now()->diffInDays(Carbon::parse($timeDuration), false); // Get the remaining days

        return view('pages.account.subscription', compact('classAttended', 'remainingDays'));
    }

    public function upgrade(Request $request)
    {
        // Logic for upgrading the student's subscription class
        $student = $request->user();

        // Upgrade based on current class level
        switch ($student->class_attended) {
            case 'Beginner':
                $student->class_attended = 'Intermediate';
                break;
            case 'Intermediate':
                $student->class_attended = 'Advanced';
                break;
            case 'Advanced':
                return redirect()->route('subscription.index')->with('info', 'You are already at the highest level!');
            default:
                return redirect()->route('subscription.index')->with('error', 'Invalid class level.');
        }

        // Update the subscription end date, e.g., adding 30 more days to the current duration
        $student->time_duration = Carbon::now()->addDays(30); // Extend by 30 days
        $student->save();

        return redirect()->route('subscription.index')->with('success', 'Class upgraded successfully to ' . $student->class_attended . '!');
    }

    public function cancel(Request $request)
    {
        // Logic for canceling the subscription
        $student = $request->user();
        $student->time_duration = Carbon::now(); // Set the time_duration to the current time to mark as expired
        $student->save();

        return redirect()->route('subscription.index')->with('success', 'Subscription has been canceled.');
    }

    public function updateStatus(Request $request)
    {
        $user = Auth::user();

        // Check if 'status' is provided in the request
        if ($request->has('status')) {
            $user->status = $request->input('status'); // Assuming 'status' is the column to be updated
            $user->save();

            return response()->json(['success' => true, 'message' => 'Status updated']);
        } else {
            return response()->json(['success' => false, 'message' => 'Status not provided'], 400);
        }
    }
    public function getStatus()
    {
        $user = Auth::user();

        if ($user) {
            return response()->json(['status' => $user->status]);
        }

        return response()->json(['status' => 'unknown'], 401);
    }

}
