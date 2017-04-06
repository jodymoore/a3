<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class pswdGenController extends Controller
{

    /*
     *  about
     */
    public function about() {

        return view('about');
    }

    /*
     *  Show
     */
    public function show(Request $request) {

        return view('index');
    }

    /*
     *  Generate Password
     */
    public function GenPass(Request $request) {

        $errors = $this->validate($request, [

            'Number_of_Words' => 'required|numeric|between:0,50'

        ]);

        $numwords = $request->input('Number_of_Words'); 

        $includeN = $request->has('Include_a_number');

        $includeS = $request->has('Include_a_symbol');

        // open common Word Dictionary file
        $file = fopen("../resources/commonWordDic.txt", "r");

        $password = '';
        // read in file explode each word into array
        if ($file) {
            $words = explode("\n", fread($file, filesize("../resources/commonWordDic.txt")));
        }
        // loop for number of words 
        for ($i=0; $i < $numwords; $i++) { 
            // use rand to get random value
            $rand = rand(0,9914); 

            // append random word from array to password variable         
            $password = $password.$words[$rand];   

            //append hyphen to password
            $password = $password.'-';                
        }
        // strip last hyphen
        //dump($password);
        $password = substr($password,0,strlen($password)-1); 
        // condition for include a number
        if ($includeN) {
            // assign random number to num variable
            $num = rand(0,10000);
            // append number to password variable
            $password = $password.$num;
        }

        $options ='';
        // condition for include a symbol
        if ($includeS) {

                switch($request->input('options'))
                {
                    case "@": $options = "@"; break;

                    case "#": $options = "#"; break;

                    case "$": $options = "$"; break;

                    case "%": $options = "%"; break;

                    default: $options = "@"; break;
                }
                $password = $password.$options;    
        }
        else
        {
           $password = $password;
        }

        return view('result')->with([

          'password' => $password,
          'errors' => $errors

        ]);
    }
}