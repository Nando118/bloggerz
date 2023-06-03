{{-- @dd($post) --}}
@extends('layouts.main')

{{-- View Single Post --}}

{{-- Content --}}
@section('content')
  <article class="mb-5">
    <h2>{{ $title_post }}</h2>
    <p class="mb-4">By: {{ $post->author }} in <em><a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</em></a></p>
    
    {!! $post->body !!}
  </article>

  <a href="/blog">Back to Blog Posts</a>
@endsection
{{-- Content --}}