<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;

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


// Home
Route::get('/', function () {
    return view('home',[
        'title' => 'Home',
        'active' => 'home',
    ]);
});
Route::get('/home', function () {
    return view('home',[
        'title' => 'Home',
        'active' => 'home',
    ]);
});


// About
Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active' => 'about',
        'name' => 'Fernando Verdy Sunata',
        'email' => 'fernandoverdysunata@email.com',
        'image_name' => 'ganondorf.png'
    ]);
});


// Blog
Route::get('/posts', [PostController::class, 'index']);

// Blog - Single Post Routes
Route::get('/post/{post:slug}', [PostController::class, 'show']);
// Router di atas ini akan menggunakan wild card {...}, jadi apapun yang ada di dalam tanda {...} itu adalah wild card nya
// Nantinya nilai dari wildcard ini akan digunakan sebagai parameter pada function show() di PostController

// Blog - Category
Route::get('/categories', function(){
    return view('categories', [
        'title' => 'All Categories',
        'active' => 'categories',
        'categories' => Category::all(),
    ]);
});

// Blog - Category Post
// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts', [
//         'title' => 'Post By Category : ' . $category->name,
//         'active' => 'categories',
//         'posts' => $category->post->load(['author', 'category']),
//     ]);
// });

// Blog - User Post
// Route::get('/author/{author:username}', function(User $author){
//     return view('posts', [
//         // Lazy Eager Loading, load seluruh data saat parent ditemukan
//         'title' => 'Post By Author : ' . $author->name,
//         'active' => 'posts',
//         'posts' => $author->post->load(['author', 'category']),
//     ]);
// });


Route::middleware(['guest'])->group(function () {
    // Login
    Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);

    // Register
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store']);
});


Route::middleware(['auth'])->group(function () {
    // Logout
    Route::post('/logout', [LoginController::class, 'logout']);

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::resource('/dashboard/posts', DashboardPostController::class);
    Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);
});