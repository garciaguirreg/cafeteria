<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('index'); 
    }
}

abstract class Controller
{
    //
}
