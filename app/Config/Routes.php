<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Contoh1;
use App\Controllers\MataKuliah;
use App\Controllers\Web;

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
