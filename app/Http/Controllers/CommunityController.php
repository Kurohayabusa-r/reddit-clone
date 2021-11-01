<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index()
    {
        return view('communities.index', [
            'communities' => Community::all()
        ]);
    }

    public function show(Community $community)
    {
        return view('communities.show', [
            'currentPage' => $community->name,
            'community' => $community,
            'posts' => $community->posts
        ]);
    }

    public function create()
    {
        return view('communities.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:21|unique:communities|alpha',
            'type' => 'required|in:public,restricted,private'
        ]);

        Community::create($validated);

        return redirect("/r/" . $request['name'])->with('success', 'Successfully created community.');
    }
}
