@extends('Admin.layouts.master')
@section('title','Product Add')
@push('DateTimePicker_css')
    <!-- jquery date time picker link 1.6 begin -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css">
@endpush

@push('croperjs_js')
    <!-- cropper js -->
    <script>
        let cropper;
        const productImageInput = $('#main_image'); //main form
        const cropperModal = $('#cropperModal');  // modal
        const imageToCrop = document.getElementById('imageToCrop'); // model img tag

        // Trigger Cropper.js when an image is selected
        productImageInput.on('change', function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    imageToCrop.src = e.target.result;
                    cropperModal.modal('show'); // Show the modal
                    if (cropper) cropper.destroy(); // Destroy any previous instance
                    cropper = new Cropper(imageToCrop, {
                        aspectRatio: 3 / 2, // Adjust the aspect ratio as needed
                        viewMode: 1,
                    });
                };
                reader.readAsDataURL(file);
            }
        });

        // Handle the "Crop Image" button click
        $('#cropImage').on('click', function () {
            if (cropper) {
                // Get the cropped image as a Blob
                cropper.getCroppedCanvas().toBlob(function (blob) {
                    // Create a new file object from the blob
                    const croppedFile = new File([blob], 'cropped-image.png', { type: 'image/png' });

                    // Replace the original file input with the cropped image file
                    const dataTransfer = new DataTransfer();
                    dataTransfer.items.add(croppedFile);
                    productImageInput[0].files = dataTransfer.files;

                    cropperModal.modal('hide'); // Close the modal
                    cropper.destroy(); // Clean up the cropper instance
                }, 'image/png');
            }
        });

    </script>
@endpush

@push('cropperjs_css')
    <!-- Cropper js -->
    <link href="https://unpkg.com/cropperjs/dist/cropper.css" rel="stylesheet">
    <script src="https://unpkg.com/cropperjs/dist/cropper.js"></script>
@endpush
@section('content')


<main class="app-main">
    <!--begin::Form Validation-->
    <div class="card card-info card-outline mb-4 m-5">
        <!--begin::Header-->
        <div class="card-header"><div class="card-title">{{ isset($data) ? 'Edit Product' : 'Add Product' }}</div></div>
        <!--end::Header-->
        <!--begin::Form-->
        <form action="{{ isset($data) ? route('admin.product.update', $data->id) :  route('admin.product.store') }}" method="POST" id="form" enctype="multipart/form-data">
            @csrf
            @if(isset($data))
                @method('PUT') <!-- Use PUT method for updates -->
            @endif
            <!--begin::Body-->
            <div class="card-body">
                <!--begin::Row-->
                <div class="row g-3">
                    <!--begin::Col     product Name--> 
                    <div class="col-md-6">
                        <label for="Pname" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="Pname" name="Pname" value="{{ old('Pname', $data->name ?? '') }}" placeholder="Product Name"  required />
                        @error('Pname')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Col-->
                    <!--begin::Col      Category-->
                    <div class="col-md-6">
                        <label for="category_id" class="form-label">Category</label>
                        <select class="form-select" name ="category_id" id="category_id">
                            <option {{ isset($data) ? "" : 'selected' }} disabled value="">Choose a Category</option>
                            @foreach($category as $category)
                                <option 
                                    value="{{ $category->id }}" {{ $category->id == old('category_id', $data->category_id ?? '') ? 'selected' : '' }}
                                    >   
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>                    
                        @error('category_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Col-->
                    <!--begin::Col     product sale price-->
                    <div class="col-md-6">
                        <label for="sale_price" class="form-label">Sale Price</label>
                        <input type="number" class="form-control price-input" id="sale_price" name="sale_price" value="{{ old('sale_price', $data->sale_price ?? '') }}" placeholder="₹ 0.00"  required />
                        @error('price')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Col-->
                    <!--begin::Col     product bid start price-->
                    <div class="col-md-6">
                        <label for="bid_price" class="form-label">Bid Price</label>
                        <input type="number" class="form-control price-input" id="bid_price" name="bid_price" value="{{ old('bid_price', $data->bid_start_price ?? '') }}" placeholder="₹ 0.00" required />
                        @error('price')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Col-->
                    <!--begin::Col      product start_at   date('Y-m-d H:i:s', strtotime($request->start_at))-->
                    <div class="col-md-6">
                        <label for="start_at" class="form-label">Bid Start At</label>
                        <input type="text" class="form-control" id="start_at" name="start_at" value="{{ old('start_at', $data->start_at ?? '') }}" placeholder="Select Bid Start Time"  required />
                        @error('start_at')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Col-->
                    <!--begin::Col      product end_at-->
                    <div class="col-md-6">
                        <label for="end_at" class="form-label">Bid End At</label>
                        <input type="text" class="form-control" id="end_at" name="end_at" value="{{ old('end_at', $data->end_at ?? '') }}" placeholder="Select Bid End Time" required />
                        @error('end_at')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Col-->
                    <!--begin::Col      product Main Image-->
                    <div class="col-md-6">
                        <label for="main_image" class="form-label">Main Image</label>
                        <input type="file" class="form-control" id="main_image" name="main_image" accept="image/*"  {{ isset($data) ? "" : 'required' }} />
                        @error('main_image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Col-->
                    <!--begin::Col      product Optional Images-->
                    <div class="col-md-6">
                        <label for="more_images" class="form-label">Optional Images </label>
                        <input type="file" class="form-control" id="more_images" name="more_images[]" accept="image/*" multiple />
                        @error('more_images')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Col-->
                    <!--begin::Col Category-->
                    <div class="col-md-12">
                        <label for="description" class="form-label">Description  </label>
                        <textarea class="form-control" id="description" name="description" rows="1" cols="50" placeholder="Type your description here..."> {{ old('description', $data->description ?? '') }} </textarea>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!--end::Col-->
                    <!-- Hidden input to store the cropped image -->
                    <input type="hidden" id="croppedImageInput" name="croppedImage">
                </div>
                <!--end::Row-->
            </div>
            <!--end::Body-->
            <!--begin::Footer-->
            <div class="card-footer">
                <button class="btn btn-info" type="submit">Submit form</button>
            </div>
            <!--end::Footer-->
        </form>
        <!--end::Form-->
</div>
<!--end::Form Validation-->


</main>

<!-- Cropper Modal -->
<div class="modal fade" id="cropperModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Crop Image</h5>
        </div>
        <div class="modal-body d-flex justify-content-center align-items-center">
            <img class="img-fluid" id="imageToCrop" src="" alt="Image to Crop">
        </div>
        <div class="modal-footer">
            <button type="button" id="cropImage" class="btn btn-success">  <i class="bi bi-crop"></i> &nbsp; Crop</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div>
    </div>
  </div>
</div>





@endsection