<?php

namespace App\Controllers\Pertemuan6;

use App\Controllers\BaseController;

class Sepatu extends BaseController
{
    public function index()
    {
        $data['test'] = "Miftah";
        return view('pertemuan6/index', $data);
    }

    public function checkout()
    {
        helper('array');

        $request    = \Config\Services::request();

        if (!$this->validate(
            [
                'nama'  => [
                    'rules' => 'required|min_length[1]'
                ],
                'telp'  => [
                    'rules' => 'required|min_length[10]',
                ]
            ]
        )) {
            // The validation failed.
            return redirect()->back()->withInput()->with('error', 'Input Data Dengan Benar');
        }

        $data['nama'] = $request->getPost('nama');
        $data['telp'] = $request->getPost('telp');
        $data['sepatu'] = $request->getPost('sepatu');
        $data['ukuran'] = $request->getPost('ukuran');
        $data['harga']  = [];

        if ($data['sepatu'] == 'Nike') {
            $data['harga'] = '375000';
        } elseif ($data['sepatu'] == 'Adidas') {
            $data['harga'] = '300000';
        } elseif ($data['sepatu'] == 'Kickers') {
            $data['harga'] = '250000';
        } elseif ($data['sepatu'] == 'Eiger') {
            $data['harga'] = '275000';
        } elseif ($data['sepatu'] == 'Bucherri') {
            $data['harga'] = '400000';
        }

        return view('pertemuan6/checkout', [
            'data'  => $data
        ]);
    }
}
