<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::resource('posts', PostController::class);
Route::get('posts/{post:slug}', [PostController::class, 'show'])
    ->name('posts.show');

// Route::get('/postingan', [PostController::class, 'index']);
// Route::get('postingan/{post:slug}', [PostController::class, 'show']);

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});

Route::get('/authors/{user}', function (User $user) {
    return view('postingan', [
        'title' => 'User Post',
        'posts' => $user->posts
    ]);
});
//'title' => 'User Post',
//       'posts' => $user -> post,
Route::get('/categories', function () {
    return view('categories', [
        "title" => 'Post Categories',
        "categories" => Category::all()
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Fauzan Alghifari",
        "email" => "fauzanalghifari007@gmail.com",
        "image" => "avatar.png"
    ]);
});

Route::get('/kuis1', function () {
    return view('kuis2', [
        "title" => "Kuis 2"
    ]);
});

Route::get('/kuis2', function () {
    return view('kuis2', [
        "title" => "Kuis 2"
    ]);
});

Route::get('/kuis3', function () {
    return view('kuis3', [
        "title" => "Kuis 3"
    ]);
});
