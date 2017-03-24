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
    public function show() {
         $password = '';
         $submitted = false;
        return view('index',compact('password', 'submitted'));
    }

    /*
     *  Generate Password
     */
    public function GenPass(Request $request) {
        $submitted = false;

        $this->validate(request(), [

            'numwords' => 'required'

        ]);

        $numwords = $request->input('numwords'); 

        $includeN = $request->has('includeN');

        $includeS = $request->has('includeS');

        $file = fopen("../resources/commonWordDic.txt", "r");

        $password = '';

        if ($file) {
            $words = explode("\n", fread($file, filesize("../resources/commonWordDic.txt")));
        }

        for ($i=0; $i < $numwords; $i++) { 

            $rand = rand(0,9914); 

            $password = $password.$words[$rand];

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