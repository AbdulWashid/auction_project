@extends('Admin.layouts.master')
@section('title','Category')
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
        <table id="DataTable" class="table table-bordered table-striped">
          <thead class="table-dark">
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Category</th>
              <th>Bid Price</th>
              <th>Sale Price</th>
              <th>Bid Start At</th>
              <th>Bid End At</th>
              <!-- <th>Description</th> -->
              <th>Image</th>
              <!-- <th>More Image</th> -->
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $data)
              <tr class="align-middle">
                <td style="width: 5%; ">{{ $loop->index + 1 }}</td>
                <td style="width: 10%;">{{$data->name}}</td>
                <td style="width: 10%;">{{$data->category_name}}</td>
                <td style="width: 5%; ">₹{{$data->bid_start_price}}</td>
                <td style="width: 5%; ">₹{{$data->sale_price}}</td>
                <td style="width: 10%;">{{date('d-m-y h:i A', strtotime($data->start_at))}}</td>
                <td style="width: 10%;">{{date('d-m-y h:i A', strtotime($data->end_at))}}</td>
                <!-- <td style="width: 24%;" class="text-break">{{$data->description}}</td> -->
                <td style="width: 25%;"><img src="{{asset($data->image)}}"class="img-fluid rounded w-25" alt="Product Image"></td>
                <!-- <td style="width: 20%;" class="text-break">{{$data->moreImages}}</td> -->
                <td style="width: 20%;">
                  <a href="{{route('admin.product.edit',$data->id)}}"><button class="btn btn-primary btn-sm m-1">Edit</button></a>
                  <form action="{{route('admin.product.destroy',$data->id)}}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm m-1" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
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
