<?php

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('register');
});
