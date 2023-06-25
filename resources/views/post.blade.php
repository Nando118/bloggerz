{{-- @dd($post) --}}
@extends('layouts.main')

{{-- View Single Post --}}

{{-- Content --}}
@section('content')

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        
        <h2>{{ $post->title }}</h2>
        <p class="mb-4">By: <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <em><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</em></a></p>
        
        @if ($post->image)
          <div style="max-height: 400px; overflow: hidden; object-fit: cover;">
            <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">  
          </div>        
        @else
          <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
        @endif 

        <article class="my-3">
          {!! $post->body !!}
        </article>
      
        <a href="/posts" class="my-2">Back to Blog Posts</a>
      </div>
    </div>
  </div>

@endsection
{{-- Content --}}