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

    public function show(Post $slug){        
        // Perlu diperhatikan, untuk pengguanaan slug ataupun Routes Model Binding. Nama parameter pada functionnya itu wajib sama dengan nama parameter di wildcard routes nya
        $result_post = $slug;

        return view('post', [
            'title' => 'Post ' . $result_post['title'],
            'title_post' => $result_post['title'],
            'post' => $result_post,
        ]);
    }
}
