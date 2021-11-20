<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Image;

class UserController extends Controller
{
    public function edit(User $user)
    {
        if (auth()->check()) {
            if (auth()->user()->isNot($user)) {
                return redirect()->back();
            }
            return view('users.edit', [
                'user' => auth()->user()
            ]);
        } else {
            return redirect()->back();
        }
    }

    public function update(Request $request)
    {
        $user = auth()->user();


        $validated = $request->validate([
            'username' => [
                'required',
                Rule::unique('users')->ignore($user),
                'max:15',
                'min:4'
            ],
            'name' => 'required|max:50',
            'email' => [
                'required',
                'email:dns',
                Rule::unique('users')->ignore($user)
            ]
        ]);

        if ($request->hasFile('avatar')) {
            $request->validate([
                'avatar' => 'image'
            ]);
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->fit(200, 200)->save(public_path('/uploads/avatars/' . $filename));
            $user->avatar = $filename;
        }

        $user->username = $validated['username'];
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->save();

        return redirect("/user/$user->username/edit")->with('success', 'Successfully updated profile.');
    }

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
