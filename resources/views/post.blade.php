{{-- @dd($post) --}}
@extends('layouts.main')

{{-- View Single Post --}}

{{-- Content --}}
@section('content')
  <article class="mb-5">
    <h2>{{ $title_post }}</h2>
    <h5>Author: {{ $post->author }}</h5>
    {!! $post->body !!}
  </article>

  <a href="/blog">Back to Blog Posts</a>
@endsection
{{-- Content --}}




