<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function index()
    {
        return view('pages.account.subscription');
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
