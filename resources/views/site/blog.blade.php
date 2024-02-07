@extends('layout.master')
@section('content')
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Blog Form</h1>
         </div>
         <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item"><a href="#">Home</a></li>
               <li class="breadcrumb-item active">Blog Form</li>
            </ol>
         </div>
      </div>
   </div>
</section>
<!-- Main content -->
<section class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-6">
            <div class="card card-primary">
               <div class="card-header">
                  <h3 class="card-title"> blog Example</h3>
               </div>
               <form action="{{route('create')}}" method='post'enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                     <div class="form-group">
                        <label>BLOG cATEGORY</label>
                        <select class="custom-select"id="category"name="category">
                           <option disabled>Dissable</option>
                           @foreach (App\Models\Category::all() as $category)
                           <option value="{{$category->id}}">{{$category->name}}</option>
                           @endforeach                       
                        </select>
                     </div>
                     <div class="form-group">
                        <label for="exampleInputEmail1">Blog Title</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Blog Title">
                     </div>
                     <div class="form-group">
                        <label for="exampleInputPassword1">Blog Short Description</label>
                        <textarea type="text" class="form-control" id="sdescription" name="sdescription"placeholder="Short Description"></textarea>
                     </div>
                     <div class="form-group">
                        <label for="exampleInputPassword1">Blog Full Description</label>              
                        <textarea id="content"cols="30" rows="10" name="content">
                        </textarea>
                     </div>
                     <div class="col-sm-6 mt-3 mr-3">
                        <label for="title">IMAGE</label>
                        <input type="file" class="form-control" id="image" name="image">
                     </div>
                  </div>
                  <div class="card-footer">
                     <input type="submit" class="btn btn-primary" value="Submit">
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection