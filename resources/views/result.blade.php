
@extends('layouts.master')

@section('content')
<div id="title"> 
    <h1>Password Generator</h1>
</div>
<?php if($submitted): ?>
    <div class="alert alert-success">
        <strong>Your password:</strong><br>
        {{ $password }}                   
    </div>
<?php endif; ?> 
@endsection