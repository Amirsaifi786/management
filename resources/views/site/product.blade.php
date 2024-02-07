<!-- Include CKEditor from CDN -->
@extends('layout.master')
@section('content')

<!-- Your HTML form -->
<div class="products"style="height:300;width:400;padding:50px 50px 50px 50px;background:cyan;">


<section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-outline card-info">
         
            <textarea id="summernote"cols="30" rows="10">
              Place <em>some</em> <u>text</u> <strong>here</strong>
            </textarea>
         
          
        </div>
      </div>
      <!-- /.col-->
    </div>
  </section>
<script>
$(document).ready(function() {
  $('#summernote').summernote();
});

</script>


@endsection
