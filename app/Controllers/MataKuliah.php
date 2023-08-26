<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MataKuliah extends BaseController
{
    public function index()
    {
        return view('view-form-matakuliah');
    }

    public function cetak()
    {
        $request = \Config\Services::request();

        $data = [
            'kode'  => $request->getPost('kode'),
            'nama'  => $request->getPost('nama'),
            'sks'   => $request->getPost('sks')
        ];

        return view('view-data-matakuliah', $data);
    }
}
