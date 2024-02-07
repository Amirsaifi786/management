@extends('layout.master')
@section('content')

<div class="modal fade" id="addFurnitureModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Furniture</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="add_furniture_form" enctype="multipart/form-data">
        @csrf
        <div class="modal-body p-4 bg-light">
            <div class="my-2">
                <label for="title">Name of product</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Name of product" >
              </div>
          <div class="my-2">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Enter title" >
          </div>
          <div class="my-2">
            <label for="phone">price</label>
            <input type="text" name="price" class="form-control" placeholder="price" >
          </div>
          <div class="my-2">
            <label for="shortdescription">Short Description</label>
            <input type="text" name="shortdescription" class="form-control" placeholder="shortdescription" >
          </div>
          <div class="my-2">
            <label for="Description">Description</label>
            <input type="text" name="description" class="form-control" placeholder="Description" >
          </div>
          <div class="my-2">
            <label for="avatar">Select Image</label>
            <input type="file" name="image" class="form-control" >
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" id="add_furniture_btn" class="btn btn-primary">Add Furniture</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- add new employee modal end --}}

{{-- edit employee modal start --}}
<div class="modal fade" id="editFurnitureModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Furniture</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="edit_furniture_form" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="fur_id" id="fur_id">
        <input type="hidden" name="fur_image" id="fur_image">
        <div class="modal-body p-4 bg-light">
            <div class="my-2">
                <label for="title">Name of product</label>
                <input type="text" id='name' name="name" class="form-control" placeholder="Enter Name of product" >
              </div>
          <div class="my-2">
            <label for="title">Title</label>
            <input type="text" id='title' name="title" class="form-control" placeholder="Enter title" >
          </div>
          <div class="my-2">
            <label for="phone">price</label>
            <input type="text" id="price"   name="price" class="form-control" placeholder="price" >
          </div>
          <div class="my-2">
            <label for="shortdescription">Short Description</label>
            <input type="text" id="shortdescription"  name="shortdescription" class="form-control" placeholder="shortdescription" >
          </div>
          <div class="my-2">
            <label for="Description">Description</label>
            <input type="text" id='description' name="description" class="form-control" placeholder="Description" >
          </div>
          <div class="my-2">
            <label for="avatar">Select Image</label>
            <input type="file" id='images' name="image" class="form-control" >
          </div>
      
          <div class="mt-2" id="image">

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" id="edit_furniture_btn" class="btn btn-success">Update Furniture</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- edit Furniture modal end --}}

{{-- <body class="bg-light"> --}}
  <div class="container">
    <div class="row my-5">
      <div class="col-lg-12">
        <div class="card shadow">
          <div class="card-header bg-danger d-flex justify-content-between align-items-center">
            <h3 class="text-light">Manage Furniture Goods</h3>
            <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addFurnitureModal"><i
                class="bi-plus-circle me-2"></i>Add New Furniture</button>
          </div>
          <div class="card-body" id="show_all_furniture">
            <h1 class="text-center text-secondary my-5">Loading...</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
{{-- </body> --}}

@endsection