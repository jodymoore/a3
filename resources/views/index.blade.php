@extends('layouts.master')

@section('content')

            <div id="title"> 
                <h1>Password Generator</h1>
            </div>
            <img
            src='/images/password_strength.png'
            alt='xkcd Password Generator Logo'>

            <form action="index.php"> 
            <div id ="form">
        <label for="numwords" ><strong>Number Of Words</strong></label>
            <input id="numwords" type="text" name="numwords"  required><br>
                <em>* Required</em><br>
        <label for="options" ><strong>Options</strong></label>
            <input id="includeN"" type='checkbox' name="includeN" >Include a number<br>
        <label for="includeS" ></label>
            <input id="includeS"" type='checkbox' name="includeS" >Include a symbol<br>
        <select id="options" name="options">
            <option value="@">@</option>
            <option value="#">#</option>
            <option value="$">$</option>
            <option value="%">%</option>
         </select>           
            <br>
            <input type="submit" name="Generate a password" value="Generate a password" class='btn btn-primary  btn-small'>

            </div>
    </form>

@endsection
