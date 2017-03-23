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

        return view('index');
    }

    /*
     *  Generate Password
     */
    public function GenPass() {

        $this->validate(request(), [

            'numwords' => 'required|numeric'

        ]);
    }

}