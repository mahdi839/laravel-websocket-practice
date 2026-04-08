<?php

namespace App\Http\Controllers;

use App\Events\MemberCreated;
use App\Models\Member;
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
            'email' => 'required',
            'address' => 'required',
        ]);

        $member = Member::create($validated);
        event(new MemberCreated($member));

        return redirect()
            ->back()
            ->with('success', 'Member created successfully and email sent.');
    }
}
