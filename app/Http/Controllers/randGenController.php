<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class randGenController extends Controller
{
    /*
     *  Show
     */
    public function show(Request $request) {
 
        return view('rand');
    }

    /*
     *  Generate Password
     */
    public function GenPass(Request $request) {

        $errors = $this->validate($request, [

            'Number_of_Words' => 'required|numeric|between:0,50'

        ]);

        $numwords = $request->input('Number_of_Words'); 

        $bytes = openssl_random_pseudo_bytes($numwords);

        $password = bin2hex($bytes);

        return view('result2')->with([

          'password' => $password,
          'errors' => $errors

        ]);


    }
}
