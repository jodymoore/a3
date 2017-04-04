@extends('layouts.master')

@section('content')

<div id="show">
	<img src="/images/xkcd.png" alt="xkcd">
	<h1>Password Generator</h1>
</div>
    <input id='enter' type="submit" onclick="window.location='{{ url("/pswdgen") }}'" name="Enter" value="Enter Site" class='btn btn-primary  btn-small'>

@endsection