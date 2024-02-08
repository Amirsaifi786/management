@extends('layout.master')
@section('content')
<div class="container">
   <h5>Laravel Ajax CRUD Tutorial </h5>
   <a class="btn btn-success" href="javascript:void(0)" id="createNewProduct"> Create New Product</a>
   <table class="table table-bordered data-table"id="itemTable">
      <thead>
         <tr>
            <th>No</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
         </tr>
      </thead>
      <tbody>
      </tbody>
   </table>
</div>
<div class="modal fade" id="ajaxModel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="modelHeading"></h4>
         </div>
         <div class="modal-body">
            <form id="productForm" name="productForm" class="form-horizontal"method="POST">
                @csrf
               <input type="hidden" name="product_id" id="product_id">
               <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-12">
                     <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" maxlength="50" required="">
                  </div>
               </div>
               <div class="form-group">
                  <label class="col-sm-2 control-label">Details</label>
                  <div class="col-sm-12">
                     <textarea id="detail" name="detail" required="" placeholder="Enter Details" class="form-control"></textarea>
                  </div>
               </div>
               <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save changes
                  </button>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection