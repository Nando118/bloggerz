{{-- @dd($post) --}}
@extends('layouts.main')

{{-- View Single Post --}}

{{-- Content --}}
@section('content')
  <article class="mb-5">
    <h2>{{ $post->title }}</h2>
    <p class="mb-4">By: <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <em><a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</em></a></p>
    
    {!! $post->body !!}
  </article>

  <a href="/blog" class="mt-2">Back to Blog Posts</a>
@endsection
{{-- Content --}}