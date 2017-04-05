@extends('layouts.master')

@section('content')

<div id="title"> 
    <h1>Random Password Generator</h1>
    @include('nav')
</div>

<img id="rimg" src='/images/crypto.jpg' alt='xkcd Password Generator Logo'>

<form method="POST" action="/RGen">

    {{ csrf_field() }}

    <div id ="form">
        <label for="Number_of_Words" ><strong>Number of Words</strong></label>
        <input id="numwords" type="text" name="Number_of_Words" value="{{ old('Number_of_Words',20) }}" required><br>
            <em>* Required</em><br>
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </ul>
            </div>
            @endif
          
        <br>
        <input id="genButton" type="submit" name="Generate a password" value="Generate a password" class='btn btn-primary  btn-small'>
        <input id="resetButton" type="button" name="Reset" onclick="window.location='{{ url("/RGen") }}'" value="Reset" class='btn btn-primary  btn-small'>
    </div>
</form>

@endsection