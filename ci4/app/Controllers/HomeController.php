<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index()
    {
        // Load a view and pass data to it
        return view('home');
    }
}
