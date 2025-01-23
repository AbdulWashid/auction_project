@extends('Admin.layouts.master')
@section('title','Feature')
@section('content')
<!--begin::App Main-->
<main class="app-main">
    <div class="container mt-5">
        <h2>Product Features</h2>
        <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#featureModal" id="addFeatureBtn">Add Feature</button>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Key</th>
                    <th>Value</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($features as $feature)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $feature->product_name }}</td>
                        <td>{{ $feature->feature_key }}</td>
                        <td>{{ $feature->feature_value }}</td>
                        <td>
                            <button class="btn btn-warning btn-sm editFeatureBtn" 
                                    data-id="{{ $feature->id }}" 
                                    data-key="{{ $feature->key }}" 
                                    data-value="{{ $feature->value }}">
                                Edit
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

<!-- Modal -->
    <div class="modal fade" id="featureModal" tabindex="-1" aria-labelledby="featureModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="featureForm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="featureModalLabel">Add Feature</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="featureId">
                        <div class="mb-3">
                            <label for="key" class="form-label">Key</label>
                            <input type="text" class="form-control" id="key" name="key" required>
                        </div>
                        <div class="mb-3">
                            <label for="value" class="form-label">Value</label>
                            <input type="text" class="form-control" id="value" name="value" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            // Add Feature Modal
            $('#addFeatureBtn').click(function () {
                $('#featureId').val('');
                $('#key').val('');
                $('#value').val('');
                $('#featureModalLabel').text('Add Feature');
            });

            // Edit Feature Modal
            $('.editFeatureBtn').click(function () {
                const id = $(this).data('id');
                const key = $(this).data('key');
                const value = $(this).data('value');

                $('#featureId').val(id);
                $('#key').val(key);
                $('#value').val(value);
                $('#featureModalLabel').text('Edit Feature');
                $('#featureModal').modal('show');
            });

            // Submit Form
            $('#featureForm').submit(function (e) {
                e.preventDefault();
                const id = $('#featureId').val();
                const url = id ? `/product-features/${id}` : `/product-features`;
                const method = id ? 'PUT' : 'POST';
                const data = {
                    key: $('#key').val(),
                    value: $('#value').val(),
                    _method: method,
                    _token: '{{ csrf_token() }}',
                };

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: data,
                    success: function (response) {
                        alert(response.success);
                        location.reload();
                    },
                    error: function (xhr) {
                        alert('An error occurred.');
                    }
                });
            });
        });
    </script>
</main>
<!--end::App Main-->

  @endsection


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

