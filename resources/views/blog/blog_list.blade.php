
@extends('layout.master')

@section('content')
{{-- <div class="modal fade" id="ModalNew1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="ModalNew">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Blog Edit </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="myformedit" class="myform"> 

                  
       <input type="hidden" id="postId" name="post_id">          
       <div class="modal-body">
            <label for="recipient-name" class="col-form-label"></label>
             

                       <label>BLOG CATEGORY</label>
                        <select class="custom-select"id="category"name="category">
                           <option disabled>Dissable</option>
                           @foreach (App\Models\Category::all() as $category)
                           <option value="{{$category->id}}">{{$category->name}}</option>
                           @endforeach                       
                        </select>
                    </div>       
          <div class="modal-body">
            <label for="recipient-name" class="col-form-label">Blog Title</label>
            <input type="text" class="form-control" id="titles" name="titles" value=''>
          </div>
          <div class="modal-body">
            <label for="recipient-name" class="col-form-label">Short description</label>
            <input type="text" class="form-control" id="sdescriptions" name="sdescriptions" value=''>
          </div>

          <div class="modal-body">
            <label for="recipient-name" class="col-form-label">Blog Full Description </label>
                        
            <textarea id="contents"cols="30" rows="10" name="contents"value=''>
            </textarea>
          </div>
        
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary save-button"  name="submit" id="save-button">Save
              changes</button>
          </div>
        </form>
      </div>
    </div>
  </div> --}}
  <!-- resources/views/blog/edit.blade.php -->

<!-- Your main content -->

<!-- Edit Modal -->
<div class="modal fade" id="editStudentModal" tabindex="-1" role="dialog" aria-labelledby="editStudentModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="editStudentModalLabel">Edit Student</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form id="editStudentForm">
                  @csrf
                  @method('PUT')

                  <div class="form-group">
                      <label for="editName">Name</label>
                      <input type="text" class="form-control" id="titles" name="titles">
                  </div>

                  <div class="form-group">
                      <label for="editEmail">Email</label>
                      <input type="email" class="form-control" id="sdescriptions" name="sdescriptions">
                  </div>

                  <!-- Add other fields as needed -->

                  <button type="submit" class="btn btn-primary">Save Changes</button>
              </form>
          </div>
      </div>
  </div>
</div>

<!-- Your main content continues... -->

  <div class="modal fade" id="ModalNew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="ModalNew">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Blog Add  </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="myform" class="myform"action="{{route('save')}}"method="POST"enctype="multipart/form-data">
          @csrf
      
          <div class="modal-body">
            <label for="recipient-name" class="col-form-label"></label>
             

                       <label>BLOG CATEGORY</label>
                        <select class="custom-select"id="category"name="category">
                           <option disabled>Dissable</option>
                           @foreach (App\Models\Category::all() as $category)
                           <option value="{{$category->id}}">{{$category->name}}</option>
                           @endforeach                       
                        </select>
                    </div>       
          <div class="modal-body">
            <label for="recipient-name" class="col-form-label">Blog Title</label>
            <input type="text" class="form-control" id="title" name="title" >
          </div>
          <div class="modal-body">
            <label for="recipient-name" class="col-form-label">Short description</label>
            <input type="text" class="form-control" id="sdescription" name="sdescription" >
          </div>

          <div class="modal-body">
            <label for="recipient-name" class="col-form-label">Blog Full Description </label>
                     
            <textarea id="content"cols="30" rows="10" name="content">
            </textarea>
          </div>
          <div class="modal-body">
            <label for="title">IMAGE</label>
            <input type="file" class="form-control" id="image" name="image">
         </div>
        
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary save-button"  name="submit" id="save-button">Save
              changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3><div style="float:right;heigt:40px width:100px"><button type="button" class="btn  btn-block btn-primary btn-lg addbutton">Primary</button>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>Id</th>
          <th>Category</th>
          <th>Title</th>
          <th>Short description</th>
          {{-- <th>Full description</th> --}}
          <th>Image</th>
          <th>Action</th>
        </tr>
        </thead>
        <tbody>

            @foreach ($blogdata as $field)
            <tr>
                <td>{{ $field->id }}</td>
                <td>{{ $field->category_id }}</td>
                <td>{{ $field->title }}</td>
                <td>{{ $field->sdescription }}</td>
                {{-- <td>{{ $field->content }}</td> --}}
                <td><img src="{{ asset('uploads/' . $field->image) }}" style="border-radius:50%;"  height="40px" width="40px" alt=""
                        class="img">
                </td >            
                
            <td >           



                <button type="submit" class="btn-primary edit-btn edit_course" data-id="{{ $field->id }}"  ><i 
                class="fa fa-1x fa-edit"></i></button> 

                  {{-- <a href="{{ url('edit-student/'.$field->id) }}" class="btn btn-primary btn-sm">Edit</a> --}}
                
                  <button class="btn-danger edit-btn delete_course" data-id="{{ $field->id }}" ><i
                  class="fa fa-1x fa-trash"></i></button>             
                </td>
            </tr>
        @endforeach           
        </tbody>
        <tfoot>
        <tr>
          <th>Id</th>
          <th>Category</th>
          <th>Title</th>
          <th>Short description</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>

  
  <script>
 $(document).ready(function() {
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');      
    });

         $('.addbutton').click(function() {
           $('#ModalNew').modal('toggle');
            $('#myform').trigger('reset');
          });

       // In the same Blade file or a separate JS file
// $(document).ready(function () {
//     $('.edit-btn').on('click', function () {
//         var postId = $(this).data('id');
//         var editUrl = $(this).data('url');

//         // Set the post ID in the hidden input
//         $('#postId').val(postId);

//         $.ajax({
//             url: editUrl,
//             method: 'GET',
//             success: function (response) {
//                 var post = response.post;
//                 $('#editTitle').val(post.title);
//                 $('#editContent').val(post.content);
//                 $('#editForm').attr('action', '/posts/' + postId);
//             },
//             error: function (error) {
//                 console.log(error);
//             }
//         });
//     });

//     $('#editForm').on('submit', function (e) {
//         e.preventDefault();

//         // Collect all data from the form
//         var formData = $(this).serialize();

//         $.ajax({
//             url: $(this).attr('action'),
//             method: 'PUT',
//             data: formData,
//             success: function (response) {
//                 $('#editModal').modal('hide');
//                 // Handle success message or reload page
//             },
//             error: function (error) {
//                 console.log(error);
//                 // Handle error
//             }
//         });
//     });
// // });


    

// Your JavaScript code (make sure to include jQuery)


$('.edit_course').on('click', function () {
        var studentId = $(this).data('id');
        var editUrl = '/edit-student/' + studentId;
        $.ajax({
          url: editUrl,
          method: 'GET',
          success: function (response) {
            var student = response.student;
            
         
           

                // Fill the modal fields with student data
                $('#titles').val(student.titles);
                $('#sdescriptions').val(student.sdescriptions);
                // Update the form action URL
                $('#editStudentForm').attr('action', '/update-student/' + studentId);

                // Show the edit modal
                // $('#editStudentModal').modal('show');

            },
            error: function (error) {
                console.log(error);
            }
        });
    });




    $('.delete_course').on('click', function (e) {
      e.preventDefault();
      // var deleteId = $(this).data('id');
      //   var editUrl = '/edit-student/' + deleteId;
      var result = confirm("Want to delete?");
         if (result) {
    //Logic to delete the item


      var delete_id = $(this).data('id');
        var editUrl = '/delete-product/' + delete_id;
      $.ajax({
        url: editUrl,
        type: "DELETE",
        // data: {
        //   'id': delete_id
        // },
        success: function(response) {
          if (response == 1) {
            //  alert("Data Deleted Successfully");
            $("#example").DataTable().ajax.reload();
          } else {
            alert("error");
            alert(response);
          }
        }
      });
    }
    });




  $(document).ready(function() {
    $('#contents').summernote();
  });
});  
</script>


  

@endsection