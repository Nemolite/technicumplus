<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        return view('index');
    }

    public function news(){

        return view('news');
    }

    public function people(){

        return view('people');
    }
    public function konkurs() {

        return view('konkurs');
    }
    public function proff() {

        return view('proff');
    }
}
