
@extends('layouts.master')

@section('content')

@include('header')

@if($submitted)

    <div class="alert alert-success">
        Your password:<br>
       <h4><strong> {{ $password }} </strong></h4>                  
    </div>
    
@endif

<input type="button" name="Reset" onclick="window.location='{{ url("/pswdgen") }}'" value="Reset" class='btn btn-primary  btn-small'>

@endsection