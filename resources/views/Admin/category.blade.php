@extends('Admin.layouts.master')
@section('title','categories')
@section('content')
<main class="app-main">    
  @if(session('success'))
    <div class="container bg bg-success text-center text-white">{{ session('success')}}</div>
  @endsession
  <div class="container mt-5">
      <div class="d-flex justify-content-between align-items-center mb-3">
          <h2 class="mb-0">Category</h2>
          <a href="{{route('admin.category.create')}}"><button class="btn btn-success">Add New</button></a>
      </div>
    <div class="card mb-4">
      <div class="card-header"><h3 class="card-title">Category List</h3></div>
      <div class=" card-body table-responsive">
        <table id="DataTable" class="table table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Image</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $data)
            <tr class="align-middle">
              <td style="width: 5%;">{{ $loop->index + 1 }}</td>
              <td style="width: 30%;">{{$data->name}}</td>
              <td style="width: 25%;"><img src="{{asset($data->image)}}"class="img-fluid rounded w-25" alt="Category Image"></td>
              <td style="width: 15%;">
                <a href="{{route('admin.category.edit',$data->id)}}"><button class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i> Edit</button></a>
                <form action="{{route('admin.category.destroy',$data->id)}}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this Category?')"><i class="bi bi-trash"></i> Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>

@endsection
