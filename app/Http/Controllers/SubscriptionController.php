<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function join(Request $request)
    {
        if (!(auth()->user()->communities->contains($request['community_id']))) {
            auth()->user()->communities()->attach($request['community_id']);
        }

        return back();
    }

    public function leave(Request $request)
    {
        if (auth()->user()->communities->contains($request['community_id'])) {
            auth()->user()->communities()->detach($request['community_id']);
        }

        return back();
    }
}
