<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Latihan1 extends BaseController
{
    public function index()
    {
        echo "Selamat datang.. selamat belajar web programming";
    }

    public function penjumlahan($n1, $n2)
    {
        $model = model(ModelLatihan1::class);

        $data["nilai1"] = $n1;
        $data["nilai2"] = $n2;
        $data["hasil"] = $model->jumlah($n1, $n2);
        return view('view-latihan1', $data);
    }
}
