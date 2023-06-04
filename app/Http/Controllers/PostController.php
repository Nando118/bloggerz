<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('blog', [
            'title' => 'Blog',
            'posts' => Post::latest()->get(),
        ]);
    }

    public function show(Post $post){  
        // Parameter $post ini di dapat dari hasil passing value pada routes
        // Hasil dari $post ini adalah object Post yang seluruh nilai properties nya sudah diisi secara otomatis oleh Laravel
        // Laravel secara otomatis akan mengisi value pada properties nya berdasarkan nilai slug yang diberikan melalui URL (passing value dari routes)
        // Jadinya kita bisa menggunakan seluruh properties yang sudah terisi value nya beserta function-function yang ada pada model Post
        // Yang perlu diperhatikan adalah untuk pengguanaan slug ataupun Routes Model Binding. Nama parameter pada functionnya itu wajib sama dengan nama parameter di wildcard routes nya

        return view('post', [
            'title' => $post->title,
            'post' => $post,
        ]);
    }
}
