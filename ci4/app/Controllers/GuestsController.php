<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\GuestModel;

class GuestController extends Controller
{
    public function index()
    {
        return view('signup_form');
    }

    public function store()
    {
        $model = new GuestModel();

        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
        ];

        $model->insert($data);

        return redirect()->to('/guests');
    }

    public function showAll()
    {
        $model = new GuestModel();
        $data['guests'] = $model->findAll();

        return view('guest_list', $data);
    }
}
