<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>New laravel project with ajax</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/datepicker/1.0.10/i18n/datepicker.fi-FI.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css' />
    <link rel='stylesheet'
      href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css' />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.css" />
  
<script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
<script type="text/javascript" src="cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- include summernote css/js-->
<link href="summernote-bs5.css" rel="stylesheet">
<script src="summernote-bs5.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('public/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('public/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('public/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('public/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('public/plugins/summernote/summernote-bs4.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href=’https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css’ rel=’stylesheet’>
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">



</head>


<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('public/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo"
                height="60" width="60">
        </div>



        <nav class="main-header navbar navbar-expand navbar-light navbar-light">
            <!-- Navbar -->
            @include('layout.navbar')
            <!-- /.navbar -->
        </nav>

          
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            @include('layout.sidebar')
            <!-- /.sidebar -->
        </aside>
        <div  class="headersss"style="padding:25px 40px 0px 40px">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')

        </div>
    </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            @include('layout.footer')
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
  


    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('public/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    {{-- <script src="plugins/chart.js/Chart.min.js"></script> --}}
    <!-- Sparkline -->
    <script src="{{ asset('public/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('public/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('public/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('public/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('public/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('public/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('public/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('public/dist/js/adminlte.js') }}"></script>

    <script src="{{ asset('public/dist/js/adminlte.js') }}"></script>
    <script src="{{asset('public/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{asset('public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{asset('public/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{asset('public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{asset('public/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{asset('public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{asset('public/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{asset('public/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{asset('public/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{asset('public/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{asset('public/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{asset('public/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script>
        $(document).ready(function() {
          $('#content').summernote();
        });
        
     </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
     <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
     <script>
       $(function() {      
            // add new employee ajax request
         $("#add_employee_form").submit(function(e) {
           e.preventDefault();
           const fd = new FormData(this);
           $("#add_employee_btn").text('Adding...');
           $.ajax({
             url: '{{ route('store') }}',
             method: 'post',
             data: fd,
             cache: false,
             contentType: false,
             processData: false,
             dataType: 'json',
             success: function(response) {
               if (response.status == 200) {
                 Swal.fire(
                   'Added!',
                   'Employee Added Successfully!',
                   'success'
                 )
                 fetchAllEmployees();
               }
               $("#add_employee_btn").text('Add Employee');
               $("#add_employee_form")[0].reset();
               $("#addEmployeeModal").modal('hide');
             }
           });
         });
   
         // edit employee ajax request
         $(document).on('click', '.editIcon', function(e) {
           e.preventDefault();
           let id = $(this).attr('id');
           $.ajax({
             url: '{{ route('edit') }}',
             method: 'get',
             data: {
               id: id,
               _token: '{{ csrf_token() }}'
             },
             success: function(response) {
               $("#fname").val(response.first_name);
               $("#lname").val(response.last_name);
               $("#email").val(response.email);
               $("#phone").val(response.phone);
               $("#post").val(response.post);
               $("#avatar").html(
                 `<img src="public/storage/images/${response.avatar}" width="100" class="img-fluid img-thumbnail">`);
               $("#emp_id").val(response.id);
               $("#emp_avatar").val(response.avatar);
             }
           });
         });
   
         // update employee ajax request
         $("#edit_employee_form").submit(function(e) {
           e.preventDefault();
           const fd = new FormData(this);
           $("#edit_employee_btn").text('Updating...');
           $.ajax({
             url: '{{ route('update') }}',
             method: 'post',
             data: fd,
             cache: false,
             contentType: false,
             processData: false,
             dataType: 'json',
             success: function(response) {
               if (response.status == 200) {
                 Swal.fire(
                   'Updated!',
                   'Employee Updated Successfully!',
                   'success'
                 )
                 fetchAllEmployees();
               }
               $("#edit_employee_btn").text('Update Employee');
               $("#edit_employee_form")[0].reset();
               $("#editEmployeeModal").modal('hide');
             }
           });
         });
   
         // delete employee ajax request
         $(document).on('click', '.deleteIcon', function(e) {
           e.preventDefault();
           let id = $(this).attr('id');
           let csrf = '{{ csrf_token() }}';
           Swal.fire({
             title: 'Are you sure?',
             text: "You won't be able to revert this!",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Yes, delete it!'
           }).then((result) => {
             if (result.isConfirmed) {
               $.ajax({
                 url: '{{ route('delete') }}',
                 method: 'delete',
                 data: {
                   id: id,
                   _token: csrf
                 },
                 success: function(response) {
                   console.log(response);
                   Swal.fire(
                     'Deleted!',
                     'Your file has been deleted.',
                     'success'
                   )
                   fetchAllEmployees();
                 }
               });
             }
           })
         });
   
         // fetch all employees ajax request
         fetchAllEmployees();
   
         function fetchAllEmployees() {
           $.ajax({
             url: '{{ route('fetchAll') }}',
             method: 'get',
             success: function(response) {
               $("#show_all_employees").html(response);
               $("table").DataTable({
                 order: [0, 'asc']
               });
             }
           });
         }

         
       });
     </script>
     <script>
         $(function() {
        $("#add_furniture_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#add_furniture_btn").text('Adding...');
        $.ajax({
          url: '{{ route('fstore') }}',
          method: 'post',
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(response) {
            if (response.status == 200) {
              Swal.fire(
                'Added!',
                'Furniture Added Successfully!',
                'success'
              )
              fetchAllEmploys();
            }
            $("#add_furniture_btn").text('Add Furniture');
            $("#add_furniture_form")[0].reset();
            $("#addFurnitureModal").modal('hide');
          }
        });
      });

      // edit employee ajax request
      $(document).on('click', '.feditIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        $.ajax({
          url: '{{ route('fedit') }}',
          method: 'get',
          data: {
            id: id,
            _token: '{{ csrf_token() }}'
          },
          success: function(response) {
            $("#name").val(response.name);
            $("#title").val(response.title);
            $("#price").val(response.price);
            $("#description").val(response.description);
            $("#shortdescription").val(response.shortdescription);
            $("#image").html(
              `<img src="public/storage/images/${response.image}" width="100" class="img-fluid img-thumbnail">`);
            $("#fur_id").val(response.id);
            $("#fur_image").val(response.image);
          }
        });
      });

      // update employee ajax request
      $("#edit_furniture_form").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
        $("#edit_furniture_btn").text('Updating...');
        $.ajax({
          url: '{{ route('fupdate') }}',
          method: 'post',
          data: fd,
          cache: false,
          contentType: false,
          processData: false,
          dataType: 'json',
          success: function(response) {
            if (response.status == 200) {
              Swal.fire(
                'Updated!',
                'Furniture Updated Successfully!',
                'success'
              )
              fetchAllEmploys();
            }
            $("#edit_furniture_btn").text('Update Employee');
            $("#edit_furniture_form")[0].reset();
            $("#editFurnitureModal").modal('hide');
          }
        });
      });

      // delete employee ajax request
      $(document).on('click', '.fdeleteIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        let csrf = '{{ csrf_token() }}';
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url: '{{ route('fdelete') }}',
              method: 'delete',
              data: {
                id: id,
                _token: csrf
              },
              success: function(response) {
                console.log(response);
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
                fetchAllEmploys();
              }
            });
          }
        })
      });

      // fetch all employees ajax request
      fetchAllEmploys();

      function fetchAllEmploys() {
        $.ajax({
          url: '{{ route('ffetchAll') }}',
          method: 'get',
          success: function(response) {
            $("#show_all_furniture").html(response);
            $("#furtable").DataTable({
              order: [0, 'desc']
            });
          }
        });
      }
    });
     </script>

<script>
  $(function() {
 $("#add_testimonial_form").submit(function(e) {
 e.preventDefault();
 const fd = new FormData(this);
 $("#add_testimonial_btn").text('Adding...');
 $.ajax({
   url: '{{ route('tstore') }}',
   method: 'post',
   data: fd,
   cache: false,
   contentType: false,
   processData: false,
   dataType: 'json',
   success: function(response) {
     if (response.status == 200) {
       Swal.fire(
         'Added!',
         'Furniture Added Successfully!',
         'success'
       )
       fetchAllTestimonial();
     }
     $("#add_testimonial_btn").text('Add Testimonial');
     $("#add_testimonial_form")[0].reset();
     $("#addTestimonialModal").modal('hide');
   }
 });
});

// edit employee ajax request
$(document).on('click', '.teditIcon', function(e) {
 e.preventDefault();
 let id = $(this).attr('id');
 $.ajax({
   url: '{{ route('tedit') }}',
   method: 'get',
   data: {
     id: id,
     _token: '{{ csrf_token() }}'
   },
   success: function(response) {
     $("#name").val(response.name);
     $("#bio").val(response.bio);
     $("#designation").val(response.designation);
     $("#image").html(
       `<img src="public/storage/images/${response.image}" width="100" class="img-fluid img-thumbnail">`);
     $("#fur_id").val(response.id);
     $("#fur_image").val(response.image);
   }
 });
});

// update employee ajax request
$("#edit_testimonial_form").submit(function(e) {
 e.preventDefault();
 const fd = new FormData(this);
 $("#edit_testimonial_btn").text('Updating...');
 $.ajax({
   url: '{{ route('tupdate') }}',
   method: 'post',
   data: fd,
   cache: false,
   contentType: false,
   processData: false,
   dataType: 'json',
   success: function(response) {
     if (response.status == 200) {
       Swal.fire(
         'Updated!',
         'testimonial Updated Successfully!',
         'success'
       )
       fetchAllTestimonial();
     }
     $("#edit_testimonial_btn").text('Update Testimonial');
     $("#edit_testimonial_form")[0].reset();
     $("#editTestimonialModal").modal('hide');
   }
 });
});

// delete employee ajax request
$(document).on('click', '.tdeleteIcon', function(e) {
 e.preventDefault();
 let id = $(this).attr('id');
 let csrf = '{{ csrf_token() }}';
 Swal.fire({
   title: 'Are you sure?',
   text: "You won't be able to revert this!",
   icon: 'warning',
   showCancelButton: true,
   confirmButtonColor: '#3085d6',
   cancelButtonColor: '#d33',
   confirmButtonText: 'Yes, delete it!'
 }).then((result) => {
   if (result.isConfirmed) {
     $.ajax({
       url: '{{ route('tdelete') }}',
       method: 'delete',
       data: {
         id: id,
         _token: csrf
       },
       success: function(response) {
         console.log(response);
         Swal.fire(
           'Deleted!',
           'Your file has been deleted.',
           'success'
         )
         fetchAllTestimonial();
       }
     });
   }
 })
});

// fetch all employees ajax request
fetchAllTestimonial();

function fetchAllTestimonial() {
 $.ajax({
   url: '{{ route('tfetchAll') }}',
   method: 'get',
   success: function(response) {
     $("#show_all_testimonial").html(response);
     $("#testable").DataTable({
       order: [0, 'desc']
     });
   }
 });
}
});
</script>
<script>
  // whychooseus
  $(function() {
 $("#add_whychooseus_form").submit(function(e) {
 e.preventDefault();
 const fd = new FormData(this);
 $("#add_whychooseus_btn").text('Adding...');
 $.ajax({
   url: '{{ route('wstore') }}',
   method: 'post',
   data: fd,
   cache: false,
   contentType: false,
   processData: false,
   dataType: 'json',
   success: function(response) {
     if (response.status == 200) {
       Swal.fire(
         'Added!',
         'Whychooseus Added Successfully!',
         'success'
       )
       fetchAllwhy();
     }
     $("#add_whychooseus_btn").text('Add Whychooseus');
     $("#add_whychooseus_form")[0].reset();
     $("#addWhychooseusModal").modal('hide');
   }
 });
});

// edit employee ajax request
$(document).on('click', '.weditIcon', function(e) {
 e.preventDefault();
 let id = $(this).attr('id');
 $.ajax({
   url: '{{ route('wedit') }}',
   method: 'get',
   data: {
     id: id,
     _token: '{{ csrf_token() }}'
   },
   success: function(response) {
     $("#title").val(response.title);
     $("#description").val(response.description);
     $("#image").html(
       `<img src="public/storage/images/${response.image}" width="100" class="img-fluid img-thumbnail">`);
     $("#fur_id").val(response.id);
     $("#fur_image").val(response.image);
   }
 });
});

// update employee ajax request
$("#edit_whychooseus_form").submit(function(e) {
 e.preventDefault();
 const fd = new FormData(this);
 $("#edit_whychooseus_btn").text('Updating...');
 $.ajax({
   url: '{{ route('wupdate') }}',
   method: 'post',
   data: fd,
   cache: false,
   contentType: false,
   processData: false,
   dataType: 'json',
   success: function(response) {
     if (response.status == 200) {
       Swal.fire(
         'Updated!',
         'whychooseus Updated Successfully!',
         'success'
       )
       fetchAllwhy();
     }
     $("#edit_whychooseus_btn").text('Update Whychooseus');
     $("#edit_whychooseus_form")[0].reset();
     $("#editWhychooseusModal").modal('hide');
   }
 });
});

// delete employee ajax request
$(document).on('click', '.wdeleteIcon', function(e) {
 e.preventDefault();
 let id = $(this).attr('id');
 let csrf = '{{ csrf_token() }}';
 Swal.fire({
   title: 'Are you sure?',
   text: "You won't be able to revert this!",
   icon: 'warning',
   showCancelButton: true,
   confirmButtonColor: '#3085d6',
   cancelButtonColor: '#d33',
   confirmButtonText: 'Yes, delete it!'
 }).then((result) => {
   if (result.isConfirmed) {
     $.ajax({
       url: '{{ route('wdelete') }}',
       method: 'delete',
       data: {
         id: id,
         _token: csrf
       },
       success: function(response) {
         console.log(response);
         Swal.fire(
           'Deleted!',
           'Your file has been deleted.',
           'success'
         )
         fetchAllwhy();
       }
     });
   }
 })
});

// fetch all employees ajax request
fetchAllwhy();

function fetchAllwhy() {
 $.ajax({
   url: '{{ route('wfetchAll') }}',
   method: 'get',
   success: function(response) {
     $("#show_all_whychooseus").html(response);
     $("#whytable").DataTable({
       order: [0, 'desc']
     });
   }
 });
}
});
</script>
</body>

</html>
