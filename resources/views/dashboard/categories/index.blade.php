@extends('dashboard.layouts.main')

@section('content')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Categories</h1>
</div>

@if (session()->has('success'))

  <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
    
@endif

@if (session()->has('failed'))

<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{ session('failed') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  
@endif

<div class="table-responsive col-lg-12">
  <a href="/dashboard/categories/create" class="btn btn-primary mb-3">Create new categories <span data-feather="file-plus"></span></a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Categories Name</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $category)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $category->name }}</td>          
          <td>
            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="confirm('Are your sure to delete {{ $category->name }}?')"><span data-feather="trash-2"></span></button>
            </form>
          </td>            
        </tr>      
      @endforeach
    </tbody>
  </table>
</div>
  
@endsection