<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowingController extends Controller
{
    public function follow(Request $request)
    {
        if (!(auth()->user()->following->contains($request['user_id']))) {
            auth()->user()->following()->attach($request['user_id']);
        }

        return back();
    }

    public function unfollow(Request $request)
    {
        if (auth()->user()->following->contains($request['user_id'])) {
            auth()->user()->following()->detach($request['user_id']);
        }

        return back();
    }
}
