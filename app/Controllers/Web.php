<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Web extends BaseController
{
    public function index()
    {
        return view('index', [
            'judul' => 'Halaman Depan'
        ]);
    }

    public function about()
    {
        return view('about', [
            'judul' => 'Halaman About'
        ]);
    }
}
