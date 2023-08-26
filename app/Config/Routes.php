<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Contoh1;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Menampikan biodata contoh1
$routes->get('/contoh1', [Contoh1::class, 'index']);
