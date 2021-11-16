<?php

namespace App\Http\Controllers;

use App\Models\Community;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(Community $community, Post $post)
    {
        return view('posts.show', [
            'currentPage' => $post->title . ' : ' . $community->name,
            'community' => $community,
            'post' => $post,
            'communityCreatedAt' => date('M d, Y', strtotime($community->created_at))
        ]);
    }

    public function home()
    {
        if (Auth::check()) {
            $joinedCommunities = auth()->user()->communities->pluck('id');
            $followedUsers = auth()->user()->following->pluck('id');
            return view('home', [
                'posts' => Post::whereIn('community_id', $joinedCommunities)->orWhereIn('user_id', $followedUsers)->latest()->get(),
                'randomCommunities' => Community::inRandomOrder()->take(5)->get()
            ]);
        }

        return redirect('/r/popular');
    }
}
