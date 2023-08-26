<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Matakuliah extends BaseController
{
    public function index()
    {
        return view('view-form-matakuliah');
    }

    public function cetak()
    {
        $request    = \Config\Services::request();

        if (!$this->validate(
            [
                'kode'  => [
                    'rules' => 'required|min_length[3]',
                    'errors'    => [
                        'required'  => 'Kode mata kuliah tidak boleh kosong',
                        'min_length'    => 'Kode mata kuliah terlalu pendek'
                    ]
                ],
                'nama'  => [
                    'rules' => 'required|min_length[3]',
                    'errors'    => [
                        'required'  => 'Nama mata kuliah tidak boleh kosong',
                        'min_length'    => 'Nama mata kuliah terlalu pendek'
                    ]
                ]
            ]
        )) {
            // The validation failed.
            return view('view-form-matakuliah');
        }

        $data['kode'] = $request->getPost('kode');
        $data['nama'] = $request->getPost('nama');
        $data['sks'] = $request->getPost('sks');

        return view('view-data-matakuliah', $data);
    }
}
