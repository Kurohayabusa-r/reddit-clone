<?php

namespace App\Http\Controllers;

use App\Models\Community;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'posts' => $community->posts,
            'communityCreatedAt' => date('M d, Y', strtotime($community->created_at))
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

    public function popular()
    {
        return view('popular', [
            'posts' => Post::all(),
            'randomCommunities' => Community::inRandomOrder()->take(5)->get()
        ]);
    }

    public function home()
    {
        if (Auth::check()) {
            return view('home', [
                'communities' => auth()->user()->communities,
                'randomCommunities' => Community::inRandomOrder()->take(5)->get()
            ]);
        }

        return redirect('/r/popular');
    }
}
