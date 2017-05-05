@extends('layouts.master')

@section('content')

@include('header')

@if ()
<div class="alert alert-success">
    Your password:<br>
    <h4 id="results"><strong> {{ $password }} </strong></h4>                  
</div>
<br>
<br>
<input id="resultReset" type="button" name="Reset" onclick="window.location='{{ url("/RGen") }}'" value="Reset" class='btn btn-primary  btn-small'>

@endsection