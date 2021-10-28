<?php

namespace App\Http\Controllers;

use App\Models\Community;
// use Illuminate\Http\Request;

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
}
