
@extends('layouts.master')

@section('content')
<div id="show">
	<img src="/images/xkcd.png">
	<h1>Password Generator</h1>
</div>
<a href="/pswdgen/">
<input id='enter' type="submit" name="Enter" value="Enter Site" class='btn btn-primary  btn-small'>
</a>

@endsection