<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FollowingController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('locale/{locale}', function($locale){
    \Session::put('locale',$locale);
    return redirect()->back();
});
Route::get('/', [PostController::class, 'home']);
Route::get('/r/{community:name}/posts/{post:slug}', [PostController::class, 'index']);

Route::get('/r/popular', [CommunityController::class, 'popular']);
Route::get('/r/{community:name}', [CommunityController::class, 'show']);
Route::get('/communities', [CommunityController::class, 'index']);
Route::get('/create-community', [CommunityController::class, 'create'])->middleware('auth');
Route::post('/create-community', [CommunityController::class, 'store']);

Route::post('/join-community', [SubscriptionController::class, 'join']);
Route::post('/leave-community', [SubscriptionController::class, 'leave']);

Route::post('/follow', [FollowingController::class, 'follow']);
Route::post('/unfollow', [FollowingController::class, 'unfollow']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/signup', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/signup', [RegisterController::class, 'store']);

Route::get('/user/{user:username}/edit', [UserController::class, 'edit']);
Route::get('/user/{user:username}/posts', [UserController::class, 'posts']);
Route::get('/user/{user:username}/communities', [UserController::class, 'communities']);
Route::get('/user/{user:username}/following', [UserController::class, 'following']);
Route::get('/user/{user:username}/followers', [UserController::class, 'followers']);
Route::put('/update-profile', [UserController::class, 'update']);
