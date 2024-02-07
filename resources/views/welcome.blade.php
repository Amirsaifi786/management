@extends('layout.master')
@section('content')

<div class="formfield"style="height:600px;width:400px;padding:50px 50px 0 0;margin: auto;">


  {!! Form::open(['url' => '/submit-form', 'method' => 'post'],['class' => 'form-control']) !!}

 

{{ Form::label('name', 'Name') }}
{{ Form::text('name', null, ['class' => 'form-control']) }}

{{ Form::label('lastname', 'Last Name') }}
{{ Form::text('lastname', null, ['class' => 'form-control']) }}

{{ Form::label('dob', 'Date of Birth') }}
{{ Form::date('dob', null, ['class' => 'form-control']) }}

{{ Form::label('fullname', 'Full Name') }}
{{ Form::text('fullname', null, ['class' => 'form-control']) }}

{{ Form::label('select_field', 'Select Field') }}
{{ Form::select('select_field', ['jaipur' => 'jaipur','Kota' => 'Kota', 'Agra' => 'Agra'], null, ['class' => 'form-control']) }}

{{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
{!! Form::close() !!}

</div>
  


@endsection