@extends('layouts.main')

{{-- View Blog --}}

{{-- Content --}}
@section('content')
  <h1 class="mb-5">Post Category : {{ $category }}</h1>
    @foreach ($blog_posts as $blog_post)
        <article class="mb-5">
          <h2><a href="/post/{{ $blog_post->slug }}" class="text-decoration-none">{{ $blog_post->title }}</a></h2>
          <h6 class="mb-3">By: <a href="/author/{{ $blog_post->author->username }}" class="text-decoration-none">{{ $blog_post->author->name }}</a></h6>        
          <p>{{ $blog_post->excerpt }}</p>
        </article>
    @endforeach
@endsection
{{-- Content --}}
