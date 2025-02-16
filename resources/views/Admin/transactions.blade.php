@extends('Admin.layouts.master')
@section('title','Translations')
@section('content')
<!--begin::App Main-->
<main class="app-main">  
  @if(session('success'))
   <div class="bg-success text-center">
     {{session('success')}}
    </div>
  @endif  
  
    <div class="container mt-5">
      <div class="card-header">
        <h3> Transaction List</h3>
      </div>
      <div class="card mb-4">
        <div class="card-header">
          <div class="container-fluid">
              <div class="row g-2">
                  <!-- Status Dropdown -->
                  <div class="col-12 col-md-4">
                      <select id="status" name="status" class="form-select w-100" aria-label="Status selection">
                          <option value="" disabled selected>Select a status</option>
                          <option value="all">All</option>
                          <option value="approved" {{ $status == 'approved' ? 'selected' : " " }}>Approved</option>
                          <option value="pending" {{ $status == 'pending' ? 'selected' : " " }}>Pending</option>
                          <option value="cancelled" {{ $status == 'cancelled' ? 'selected' : " " }}>Cancelled</option>
                      </select>
                  </div>
      
                  <!-- Date Picker -->
                  <div class="col-12 col-md-4">
                      <input name="date" type="date" id="date" value="{{old('date')}}" class="form-control w-100">
                  </div>
      
                  <!-- Search Input -->
                  <div class="col-12 col-md-4">
                      <div class="input-group">
                          <span class="input-group-text" id="search-addon"><i class="bi bi-search"></i></span>
                          <input value="{{old('search')}}" type="search" class="form-control" placeholder="Search..." name="search" id="search" aria-label="Search" aria-describedby="search-addon">
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
        <div class=" card-body table-responsive">
          <table class="table table-bordered table-hover">
            <thead class="table-dark">
              <tr>
                <th>#</th>
                <th>Wallet Address</th>
                <th>Amount</th>
                <th>Transaction id</th>
                <th>Email</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody id="tbody">
            </tbody>
          </table>
        </div>
        <div class="card-footer">
        </div>
      </div>
    </div>
  </main>
<!--end::App Main-->
@push('transaction_script')
  <script>
    $(document).ready(function(){
        function fetchData(page = 1) {
            let formData = {
                date: $("#date").val(),
                status: $("#status").val(),
                search: $("#search").val(),
                page : page,
            };

            $.ajax({
                url: "{{ route('admin.filter') }}", // Route for filtering data
                method: "GET",
                data: formData,
                success: function(response) {
                  $('#tbody').html(response.tableData);
                  $(".card-footer").html(response.pagination);
                }
            });
        }

        // Trigger AJAX on change of filters
        $("#date, #status, #search").on("change keyup", function(){
          setTimeout(() => {
            fetchData();
          }, 500);
        });
        // Handle pagination clicks
        $(document).on("click", ".pagination a", function(e) {
            e.preventDefault();
            let page = $(this).attr("href").split("page=")[1];
            fetchData(page);
        });
        // Load data initially
        fetchData();
    });
  </script>
@endpush
@endsection