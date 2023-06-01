@extends('layouts.main')

{{-- View Blog --}}

{{-- Content --}}
@section('content')
  @foreach ($blog_posts as $blog_post)
      <article class="mb-5">
        <h2><a href="/post/{{ $blog_post->slug }}">{{ $blog_post->title }}</a></h2>
        <h5>Author: {{ $blog_post->author }}</h5>
        <p>{{ $blog_post->excerpt }}</p>
      </article>
  @endforeach
@endsection
{{-- Content --}}
