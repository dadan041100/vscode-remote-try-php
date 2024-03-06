<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
    public function index()
    {
        // Load views using CodeIgniter's view() method
        return view('header') . view('home') . view('footer');
    }

    public function about()
    {
        // Load views using CodeIgniter's view() method
        return view('header');
    }
}
