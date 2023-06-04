@extends('layouts.main')

{{-- View Blog --}}

{{-- Content --}}
@section('content')
    @foreach ($posts as $post)
        <article class="mb-5 border-bottom pb-3">
          <h2><a href="/post/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
          <h6 class="mb-3">By: <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <em><a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</em></a></h6>        
          <p>{{ $post->excerpt }}</p>
          <a href="/post/{{ $post->slug }}" class="text-decoration-none">Read More...</a>
        </article>
    @endforeach
@endsection
{{-- Content --}}
