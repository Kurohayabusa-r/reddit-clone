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
            'user' => $user
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
}
