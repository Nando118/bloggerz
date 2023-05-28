@extends('layouts.main')

{{-- Content --}}
@section('content')
  <article class="mb-5">
    <h2>{{ $title_post }}</h2>
    <h5>Author: {{ $post['author'] }}</h5>
    <p>{{ $post['body'] }}</p>
  </article>

  <a href="/blog">Back to Blog Posts</a>
@endsection
{{-- Content --}}
