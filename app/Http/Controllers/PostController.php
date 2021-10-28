<?php

namespace App\Http\Controllers;

use App\Models\Community;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Community $community, Post $post)
    {
        return view('posts.show', [
            'currentPage' => $post->title . ' : ' . $community->slug,
            'community' => $community,
            'post' => $post
        ]);
    }
}