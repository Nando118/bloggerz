@extends('layouts.main')

{{-- View Blog --}}

{{-- Content --}}
@section('content')
  <h1 class="mb-5">Post Categories</h1>
    @foreach ($categories as $category)
        <ul>
          <li>
            <h2><a href="/categories/{{ $category->slug }}" class="text-decoration-none">{{ $category->name }}</a></h2>
          </li>
        </ul>
    @endforeach
@endsection
{{-- Content --}}
