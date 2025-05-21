<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data['username'] = session()->get('username');

        return view('dashboard', $data);
    }
}