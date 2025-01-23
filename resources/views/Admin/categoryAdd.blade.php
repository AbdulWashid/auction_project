@extends('Admin.layouts.master')
@section('title','Category Add')
@section('content')
<main class="app-main"> 
    <div class="card card-outline card-primary container m-5 col-6">
        <h2 class="mb-4">{{ isset($data) ? 'Edit Category' : 'Add Category' }}</h2>
        <form class="card-body" action="{{ isset($data) ? route('admin.category.update', $data->id) :  route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($data))
                @method('PUT') <!-- Use PUT method for updates -->
            @endif
            <!-- Name Field -->
            <div class="col-9 mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $data->name ?? '') }}" placeholder="Enter name" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!-- Image Upload Field -->
            <div class="mb-3 col-9">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" {{ isset($data) ? "" : 'required' }}>
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <!--bg Image Upload Field --><br>
            <div class="mb-3 col-9">
                <label for="image" class="form-label">Background Image</label>
                <input type="file" class="form-control" id="bg_image" name="bg_image" accept="image/*">
                @error('bg_image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <!-- Submit Button -->
             <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>



</main>
@endsection