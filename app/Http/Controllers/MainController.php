<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // METODO HOME:
    public function home(){

        return view('pages.home');
    }
}
