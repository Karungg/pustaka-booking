<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Autentifikasi extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }
}
