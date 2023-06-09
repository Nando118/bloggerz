@extends('layouts.main')

{{-- Content --}}
@section('content')
  <h2>{{ $title }}</h2>

  <div class="container">
    <div class="row">
      @foreach ($categories as $category)
        <div class="col-md-4">
          <a href="/posts?categories={{ $category->slug }}">
            <div class="card text-bg-dark">
              <img src="https://source.unsplash.com/500x400/?{{ $category->name }}" class="card-img" alt="...">
              <div class="card-img-overlay d-flex align-items-center p-0">
                <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.5)">
                  {{ $category->name }}                  
                </h5>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>

@endsection
{{-- Content --}}