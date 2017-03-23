<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    /*
     *  Get welcome view
     */
    public function __invoke() {
        return view('welcome');
    }

    /*
     *  get /books
     */
    public function index() {
        return 'View all books...';
    }

    /*
     *  Show
     */
    public function show($title = null) {

    return view('show');
  }
}