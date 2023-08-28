<?php

use App\Controllers\Admin;
use App\Controllers\Autentifikasi;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Latihan1;
use App\Controllers\Contoh1;
use App\Controllers\MataKuliah;
use App\Controllers\Pertemuan6\Sepatu;
use App\Controllers\Web;
use App\Controllers\Buku as ControllerBuku;
use App\Controllers\Kategori;

/**
 * @var RouteCollection $routes
 */

// Menampikan biodata contoh1
$routes->get('/contoh1', [Contoh1::class, 'index']);

// Menampilkan hasil pertemuan 2
$routes->get('/pertemuan2/(:num)/(:num)', [Latihan1::class, 'penjumlahan']);

// Menampilkan form mata kuliah pertemuan2
$routes->get('/pertemuan2/matakuliah', [Matakuliah::class, 'index']);
$routes->post('/pertemuan2/matakuliah/cetak', [Matakuliah::class, 'cetak']);

// Menampilkan halaman utama rental buku
$routes->get('/', [Web::class, 'index']);

// Menampilkan halaman about
$routes->get('/about', [Web::class, 'about']);

// Tugas pertemuan 6 sepatu
$routes->get('/pertemuan6', [Sepatu::class, 'index']);
$routes->post('/pertemuan6/checkout', [Sepatu::class, 'checkout']);

// Route login user
$routes->get('/login', [Autentifikasi::class, 'index']);

// Grouping routes admin
$routes->group('/admin', static function ($routes) {
    $routes->get('', [Admin::class, 'index']);
    $routes->get('member', [Admin::class, 'member']);
    $routes->resource('buku', [ControllerBuku::class, 'index']);
    $routes->resource('kategori', [Kategori::class, 'index']);
});

$routes->get('/test', function () {
    return view('test');
});
