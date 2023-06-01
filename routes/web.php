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
Route::get('/post/{slug:slug}', [PostController::class, 'show']);
// Router di atas ini akan menggunakan wild card {...}, jadi apapun yang ada di dalam tanda {...} itu adalah wild card nya
// Kemudian nilai wildcard nya ini akan dijadikan sebagai parameter pada function show maupun function lain yang wajib/harus memasukan parameter yang dikirim dari routes
