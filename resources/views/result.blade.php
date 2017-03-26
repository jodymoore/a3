
@extends('layouts.master')

@section('content')
<div id="title"> 
    <h1>Password Generator</h1>
</div>
@if($submitted)
    <div class="alert alert-success">
        <strong>Your password:</strong><br>
        {{ $password }}                   
    </div>
@endif

<input type="button" name="Reset" onclick="window.location='{{ url("/pswdgen") }}'" value="Reset" class='btn btn-primary  btn-small'>

@endsection