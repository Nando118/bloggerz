@extends('dashboard.layouts.main')

@section('content')

<div class="container">
  <div class="row my-3">
    <div class="col-lg-12">
      
      <h2>{{ $post->title }}</h2>
      <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to my posts</a>
      <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit post</a>
      <a href="" class="btn btn-danger"><span data-feather="trash-2"></span> Delete post</a>
      
      <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid my-3" alt="{{ $post->category->name }}">

      <article class="my-3">
        {!! $post->body !!}
      </article>
    
    </div>
  </div>
</div>
  
@endsection