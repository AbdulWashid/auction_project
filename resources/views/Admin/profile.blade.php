@extends('Admin.layouts.master')
@section('title','Admin Profile')
@section('content')
<main class="app-main">  
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h2>Admin Profile</h2>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center">
                            <!-- Profile Picture -->
                            <img src="{{asset('Admin/assets/img/user2-160x160.jpg')}}" alt="Profile Picture" class="rounded-circle mb-3" width="150" height="150">
                            
                            <!-- User Info -->
                            <h4 class="mb-1">{{$data[0]->name}}</h4>
                            <p class="text-muted">{{$data[0]->email}}</p>

                            <hr class="w-100">

                            <!-- Additional Info -->
                            <div class="text-start w-100">
                                <p><strong>Phone:</strong> {{$data[0]->mobile}}</p>
                                <p><strong>Address:</strong> 123 Main Street, Cityville, USA</p>
                                <p><strong>Joined:</strong> January 1, 2023</p>
                            </div>

                            <!-- Edit Profile Button -->
                            <a href="/edit-profile" class="btn btn-primary mt-3">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>  
@endsection
