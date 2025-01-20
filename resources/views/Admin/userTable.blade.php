@extends('Admin.layouts.master')
@section('title','user')
@section('content')
<main class="app-main">
    <div class="container mt-5">
        <h1 class="text-center mb-4">User Management</h1>

        <!-- User Table -->
        <div class="table-responsive">
            <table id="DataTable" class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($data as $user)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->mobile }}</td>
                            <td>{{ date('d-m-y h:i A',strtotime($user->created_at)) }}</td>
                            <td>
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Block</button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No users found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="d-flex justify-content-center">
        </div>
    </div>
    </main>
@endsection
