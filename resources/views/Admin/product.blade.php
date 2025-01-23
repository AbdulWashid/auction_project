@extends('Admin.layouts.master')
@section('title','Products')
@section('content')
<main class="app-main">    
  @if(session('success'))
    <div class="container bg bg-success text-center text-white">{{ session('success')}}</div>
  @endsession
  <div class="container mt-4">
      <div class="d-flex justify-content-between align-items-center mb-3">
          <h2 class="mb-0">Products</h2>
          <a href="{{route('admin.product.create')}}"><button class="btn btn-success">Add New</button></a>
      </div>
    <div class="card mb-4">
      <div class="card-header"><h3 class="card-title">products List</h3></div>
      <div class=" card-body table-responsive">
        <table id="DataTable" class="table table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Category</th>
              <th>Bid Price</th>
              <th>Sale Price</th>
              <th>Bid Start At</th>
              <th>Bid End At</th>
              <th>Image</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $data)
              <tr class="align-middle">
                <td style="width: 5%;">{{ $loop->index + 1 }}</td>
                <td style="width: 11.11%;">{{$data->name}}</td>
                <td style="width: 11.11%;">{{$data->category_name}}</td>
                <td style="width: 11.11%;">₹{{$data->bid_start_price}}</td>
                <td style="width: 11.11%;">₹{{$data->sale_price}}</td>
                <td style="width: 11.11%;">{{date('d-m-y h:i A', strtotime($data->start_at))}}</td>
                <td style="width: 11.11%;">{{date('d-m-y h:i A', strtotime($data->end_at))}}</td>
                <td style="width: 17.22%;"><img src="{{asset($data->image)}}"class="img-fluid rounded w-25" alt="Product Image"></td>
                <td style="width: 11.11%;">
                  <a href="{{route('admin.product.edit',$data->id)}}"><button class="btn btn-primary btn-sm m-1"><i class="bi bi-pencil"></i> Edit</button></a>
                  <form action="{{route('admin.product.destroy',$data->id)}}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm m-1" onclick="return confirm('Are you sure you want to delete this post?')"> <i class="bi bi-trash"></i> Delete</button>
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