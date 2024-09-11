<?php

namespace App\Http\Controllers;

use App\Models\SubscriptionRequest;
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
        $timeDuration = $student->time_duration; // End date of the subscription (datetime)

        // Calculate remaining time
        $remainingDays = Carbon::now()->diffInDays(Carbon::parse($timeDuration), false); // Get the remaining days

        return view('pages.account.subscription', compact('classAttended', 'remainingDays'));
    }

    public function upgrade(Request $request)
    {
        $student = $request->user();

        // Ensure all subsections are completed before upgrading
        if (!$this->areAllSubsectionsCompleted($student)) {
            return redirect()->route('subscription.index')->with('error', 'Please complete all subsections before upgrading.');
        }

        // Determine the new plan
        $newPlan = $this->getNewPlan($student->class_attended);

        if (!$newPlan) {
            return redirect()->route('subscription.index')->with('error', 'Invalid class level.');
        }

        // Create a subscription request record
        SubscriptionRequest::create([
            'student_id' => $student->id,
            'current_plan' => $student->class_attended,
            'requested_plan' => $newPlan,
            'read_by_student' => false,
            'read_by_admin' => false,
        ]);

        // Redirect to the payment page
        return redirect()->route('payment.page')->with('success', 'Your request for an upgrade has been received. Please proceed with the payment.');
    }
    

    private function getNewPlan($currentPlan)
    {
        switch ($currentPlan) {
            case 'Beginner':
                return 'Intermediate';
            case 'Intermediate':
                return 'Advanced';
            case 'Advanced':
                return null;
            default:
                return null;
        }
    }

    private function areAllSubsectionsCompleted($student)
    {
        // Logic to check if all subsections are completed
        // Return true if all subsections are completed, otherwise false
        return true; // Placeholder logic
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
