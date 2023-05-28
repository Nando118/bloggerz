@extends('layouts.main')

{{-- Content --}}
@section('content')
  <h1>View About</h1>
  <h3>{{ $name }}</h3>
  <p>{{ $email }}</p>
  <img class="img-thumbnail rounded-circle w-25" src="img/{{ $image_name }}" alt="{{ $image_name }}" srcset="">
@endsection
{{-- Content --}}