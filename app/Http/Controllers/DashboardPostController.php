<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return Post::where('user_id', auth()->user()->id)->get()->toJson();
        return view('dashboard.posts.index', [
            'title' => 'Dashboard | Posts',
            'active' => 'dashboard_posts',
            'posts' => Post::where('user_id', auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.posts.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:posts|max:255',
            'image' => 'image|file|max:500',
            'category_id' => 'required',
            'body' => 'required',
        ]);

        if ($request->file('image')) {
            # code...
            $validatedData['image'] = $request->file('image')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 120, '...');

        $post = Post::create($validatedData);

        if ($post) {
            # code...
            return redirect('/dashboard/posts')->with('success', 'Created Post Success!');
        }else {
            return redirect('/dashboard/posts')->with('failed', 'Created Post Failed!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //        
        return view('dashboard.posts.show', [
            'title' => 'Dashboard | ' . $post->title,
            'active' => 'dashboard_posts',
            'post' => $post,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
        $rules = [
            'title' => 'required|max:255',            
            'category_id' => 'required',
            'body' => 'required',
        ];

        if ($request->slug != $post->slug) {
            # code...
            $rules['slug'] = 'required|unique:posts|max:255';
        }
        
        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 120, '...');

        $post = Post::where('id', $post->id)->update($validatedData);

        if ($post) {
            # code...
            return redirect('/dashboard/posts')->with('success', 'Created Post Success!');
        }else {
            return redirect('/dashboard/posts')->with('failed', 'Created Post Failed!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $post = Post::destroy($post->id);

        if ($post) {
            # code...
            return redirect('/dashboard/posts')->with('success', 'Post successfully deleted.');
        }else {
            return redirect('/dashboard/posts')->with('failed', 'Failed to delete the post.');
        }
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
