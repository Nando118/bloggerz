@extends('layouts.main')

{{-- View Blog --}}

{{-- Content --}}
@section('content')

  <h1 class="text-center mb-3">{{ $title }}</h1>

  <div class="row justify-content-center mb-3">
    <div class="col-md-6">
      <form action="/posts" method="GET">
        @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
          <button class="btn btn-danger" type="submit">Search</button>
        </div>
      </form>
    </div>
  </div>

  @if ($posts->count())

    {{-- Hero Content --}}
    <div class="card mb-4">
      <span class="position-absolute badge bg-secondary p-2" style="font-size: 0.8rem">
        <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none text-white">{{ $posts[0]->category->name }}</a>
      </span>
      <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
      <div class="card-body">
        <h5 class="card-title"><a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h5>
        <p>
          By: <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a>
          <small class="text-body-secondary">{{ $posts[0]->created_at->diffForHumans() }}</small>
        </p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none">Read More...</a>
      </div>
    </div>
      
    {{-- All Content --}}
    <div class="container">
      <div class="row">
        @foreach ($posts->skip(1) as $post)
          <div class="col-md-4 mb-3">
            <div class="card">
              <span class="position-absolute badge bg-secondary p-2" style="font-size: 0.8rem">
                <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a>
              </span>
              <img src="https://source.unsplash.com/500x400/?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
              <div class="card-body">
                <h5 class="card-title">
                  <a href="/post/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a>
                </h5>
                <p>
                  By: <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
                  <small class="text-body-secondary">{{ $post->created_at->diffForHumans() }}</small>
                </p>
                <p class="card-text">{{ $post->excerpt }}</p>
                <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read More...</a>
              </div>
            </div>
          </div>      
        @endforeach
      </div>
    </div>
    @else

    <div class="text-bg-primary p-3">
      <p class="text-center fs-4">
        No post found.
      </p>
    </div>

  @endif

  
  <div class="d-flex justify-content-center mt-4">
    {{ $posts->links() }}
  </div>

@endsection
{{-- Content --}}
