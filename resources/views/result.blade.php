
@extends('layouts.master')

@section('content')

@include('header')

<div class="alert alert-success">
    Your password:<br>
    <h4><strong> {{ $password }} </strong></h4>                  
</div>

<input type="button" name="Reset" onclick="window.location='{{ url("/pswdgen") }}'" value="Reset" class='btn btn-primary  btn-small'>

@endsection