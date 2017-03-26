@extends('layouts.master')

@section('content')

<div id="title"> 
    <h1>xkcd Password Generator</h1>
    </div>
        <img
            src='/images/password_strength.png'
            alt='xkcd Password Generator Logo'>

        <form method="POST" action="/pswdgen">

            {{ csrf_field() }}

            <div id ="form">
            <label for="Number_of_Words" ><strong>Number of Words</strong></label>
            <input id="numwords" type="text" name="Number_of_Words" value="{{ old('Number_of_Words') }}"  required><br>
                <em>* Required</em><br>
            <label for="options" ><strong>Options</strong></label>
            <input id="includeN"" type='checkbox' name="Include_a_number" >Include a number<br>
            <label for="includeS" ></label>
            <input id="includeS"" type='checkbox' name="Include_a_symbol" >Include a symbol<br>
            <select id="options" name="options">
                <option value="@">@</option>
                <option value="#">#</option>
                <option value="$">$</option>
                <option value="%">%</option>
             </select>           
            <br>
            <input type="submit" name="Generate a password" value="Generate a password" class='btn btn-primary  btn-small'>
            <input type="button" name="Reset" onclick="window.location='{{ url("/pswdgen") }}'" value="Reset" class='btn btn-primary  btn-small'>

            </div>
        </form>
    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
               {{ $error }}
            @endforeach
        </ul>
    </div>
    @endif

@endsection


