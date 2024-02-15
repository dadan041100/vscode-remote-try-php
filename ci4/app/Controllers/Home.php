<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
	public function index()
	{
    $this->load->view('header');
    $this->load->view('home');
    $this->load->view('footer');
	}

	public function about()
	{
    $this->load->view('header');
    $this->load->view('about');
    $this->load->view('footer');
	}
}
