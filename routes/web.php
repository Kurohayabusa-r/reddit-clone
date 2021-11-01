<?php

use App\Http\Controllers\CommunityController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\User;
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

Route::get('/', function () {
    $posts = [
        [
            "title" => "Post Title 1",
            "community" => "Community 1",
            "author" => "Author 1",
            "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, ad! Impedit
            reprehenderit temporibus molestiae nam accusamus. Voluptatibus eligendi quidem debitis
            delectus
            amet at quaerat? Cupiditate soluta accusantium est quibusdam qui."
        ],
        [
            "title" => "Post Title 2",
            "community" => "Community 2",
            "author" => "Author 2",
            "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, ad! Impedit
            reprehenderit temporibus molestiae nam accusamus. Voluptatibus eligendi quidem debitis
            delectus
            amet at quaerat? Cupiditate soluta accusantium est quibusdam qui."
        ],
        [
            "title" => "Post Title 3",
            "community" => "Community 3",
            "author" => "Author 3",
            "text" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam, ad! Impedit
            reprehenderit temporibus molestiae nam accusamus. Voluptatibus eligendi quidem debitis
            delectus
            amet at quaerat? Cupiditate soluta accusantium est quibusdam qui."
        ]
    ];
    return view('home', compact('posts'));
});

Route::get('/r/popular', function () {
    return view('popular', [
        'posts' => Post::all()
    ]);
});

Route::get('/r/{community:name}', [CommunityController::class, 'show']);
Route::get('/communities', [CommunityController::class, 'index']);
Route::get('/create-community', [CommunityController::class, 'create'])->middleware('auth');
Route::post('/create-community', [CommunityController::class, 'store']);

Route::get('/r/{community:name}/posts/{post:slug}', [PostController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/signup', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/signup', [RegisterController::class, 'store']);

Route::get('/user/{user:username}/posts', function (User $user) {
    return view('users.profile', [
        'currentPage' => $user->username,
        'user' => $user,
        'posts' => $user->posts
    ]);
});
