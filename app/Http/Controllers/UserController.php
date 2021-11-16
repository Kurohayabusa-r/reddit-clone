<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function posts(User $user)
    {
        return view('users.posts', [
            'currentPage' => $user->username,
            'user' => $user->load('posts')
        ]);
    }

    public function communities(User $user)
    {
        return view('users.communities', [
            'currentPage' => $user->username,
            'user' => $user,
            'communities' => $user->communities()->simplePaginate(15)
        ]);
    }

    public function following(User $user)
    {
        return view('users.following', [
            'currentPage' => $user->username,
            'user' => $user,
            'following' => $user->following()->simplePaginate(15)
        ]);
    }

    public function followers(User $user)
    {
        return view('users.followers', [
            'currentPage' => $user->username,
            'user' => $user,
            'followers' => $user->followers()->simplePaginate(15)
        ]);
    }
}
