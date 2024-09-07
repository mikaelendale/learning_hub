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
    $user->status = $request->status; // Assuming 'status' is the column to be updated
    $user->save();

    return response()->json(['message' => 'Status updated']);
}

}
