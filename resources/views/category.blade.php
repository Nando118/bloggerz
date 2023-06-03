@extends('layouts.main')

{{-- View Blog --}}

{{-- Content --}}
@section('content')
  <h1 class="mb-5">Post Category : {{ $category }}</h1>
    @foreach ($blog_posts as $blog_post)
        <article class="mb-5">
          <h2><a href="/post/{{ $blog_post->slug }}">{{ $blog_post->title }}</a></h2>
          <h6 class="mb-3">Author: {{ $blog_post->author }}</h6>        
          <p>{{ $blog_post->excerpt }}</p>
        </article>
    @endforeach
@endsection
{{-- Content --}}
