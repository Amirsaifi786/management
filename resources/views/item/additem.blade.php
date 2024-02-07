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
</body>
<script >

    
    $(document).ready(function() {


            var itemTable = $('#itemTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('products-ajax-crud.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'detail',
                        name: 'detail'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
            }); 
         });

       
     /*------------------------------------------
     --------------------------------------------
     Click to Button
     --------------------------------------------
     --------------------------------------------*/
     $('#createNewProduct').click(function () {
         $('#saveBtn').val("create-product");
         $('#product_id').val('');
         $('#productForm').trigger("reset");
         $('#modelHeading').html("Create New Product");
         $('#ajaxModel').modal('show');
     });
       
     /*------------------------------------------
     --------------------------------------------
     Click to Edit Button
     --------------------------------------------
     --------------------------------------------*/
     $('body').on('click', '.editProduct', function () {
       var product_id = $(this).data('id');
       $.get("{{ route('products-ajax-crud.index') }}" +'/' + product_id +'/edit', function (data) {
           $('#modelHeading').html("Edit Product");
           $('#saveBtn').val("edit-user");
           $('#ajaxModel').modal('show');
           $('#product_id').val(data.id);
           $('#name').val(data.name);
           $('#detail').val(data.detail);
       })
     });
       
     /*------------------------------------------
     --------------------------------------------
     Create Product Code
     --------------------------------------------
     --------------------------------------------*/
     $('#saveBtn').click(function (e) {
         e.preventDefault();
         $(this).html('Sending..');
       
         $.ajax({
           data: $('#productForm').serialize(),
           url: "{{ route('products-ajax-crud.store') }}",
           type: "POST",
           dataType: 'json',
           success: function (data) {
        
               $('#productForm').trigger("reset");
               $('#ajaxModel').modal('hide');
               table.draw();
            
           },
           error: function (data) {
               console.log('Error:', data);
               $('#saveBtn').html('Save Changes');
           }
       });
     });
       
     /*------------------------------------------
     --------------------------------------------
     Delete Product Code
     --------------------------------------------
     --------------------------------------------*/
     $('body').on('click', '.deleteProduct', function () {
      
         var product_id = $(this).data("id");
         confirm("Are You sure want to delete !");
         
         $.ajax({
             type: "DELETE",
             url: "{{ route('products-ajax-crud.store') }}"+'/'+product_id,
             success: function (data) {
                 table.draw();
             },
             error: function (data) {
                 console.log('Error:', data);
             }
         });
     });
        

</script>
@endsection