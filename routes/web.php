<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    ]);
});
Route::get('/home', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});


// About
Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Fernando Verdy Sunata',
        'email' => 'fernandoverdysunata@email.com',
        'image_name' => 'ganondorf.png'
    ]);
});


// Blog
Route::get('/blog', [PostController::class, 'index']);
// Blog - Single Post Routes
Route::get('/post/{slug}', [PostController::class, 'show']);
