<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

require('../resources/tools.php');

class pswdGenController extends Controller
{

    /*
     *  Get welcome view
     */
    public function __invoke() {
        return view('welcome');
    }
    
    /*
     *  Show
     */
    public function show(Request $request) {

        $numwords = $request->input('Number_of_Words'); 
        return view('index',compact('numwords'));
    }

    /*
     *  Generate Password
     */
    public function GenPass(Request $request) {
        $submitted = false;

        $this->validate($request, [

            'Number_of_Words' => 'required|numeric|between:0,25'

        ]);

        $numwords = $request->input('Number_of_Words'); 

        $includeN = $request->has('Include_a_number');

        $includeS = $request->has('Include_a_symbol');

        $file = fopen("../resources/commonWordDic.txt", "r");

        $password = '';

        if ($file) {
            $words = explode("\n", fread($file, filesize("../resources/commonWordDic.txt")));
        }

        for ($i=0; $i < $numwords; $i++) { 

            $rand = rand(0,9914); 
            
            if (strlen($words[$rand]) > 2) {
               $password = $password.$words[$rand];
            }
            
            $password = $password.'-';        
        }

        $password = substr($password,0,strlen($password)-1);

        if ($includeN) {

            $num = rand(0,10000);

            $password = $password.$num;

        }

        $options ='';

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

        $submitted = true;
        return view('result', compact('password', 'submitted'));
    }
}