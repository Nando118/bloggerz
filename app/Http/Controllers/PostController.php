<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('blog', [
            'title' => 'Blog',
            'blog_posts' => Post::all(),
        ]);
    }

    public function show($slug){
        // Router di atas ini akan menggunakan wild card {...}, jadi apapun yang ada di dalam tanda {...} itu adalah wild card nya

        $result_post = Post::find($slug);

        return view('post', [
            'title' => 'Post ' . $result_post['title'],
            'title_post' => $result_post['title'],
            'post' => $result_post,
        ]);
    }
}
