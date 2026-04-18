<?php

namespace App\Http\Controllers;

use App\Events\MemberCreated;
use App\Models\Member;
use App\Models\User;
use App\Notifications\MemberCreatedNotification;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function create()
    {
        return view('home');
    }

     public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'address' => 'required',
        ]);

        $member = Member::create($validated);

        // Example: notify user ID 1
        $user = User::find(1);

        if ($user) {
            $user->notify(new MemberCreatedNotification($member));
        }

        return response()->json([
            'success' => true,
            'message' => 'Member created and notification sent.',
        ]);
    }
}
