<?php

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Config\Services;
use App\Controllers\HomeController;
use App\Controllers\News;
use App\Controllers\GuestController;

 //*@var RouteCollection $routes
//*/

$routes->get('/', 'Home::index');
$routes->get('guests', [Guests::class, 'index']);           
$routes->get('guests/new', [Guests::class, 'new']); // Add this line
$routes->post('guests', [Guests::class, 'create']); // Add this line
$routes->get('guests/(:segment)', [Guests::class, 'show']); 

$routes->get('news', [News::class, 'index']);
$routes->get('news/new', [News::class, 'new']);
$routes->post('news', [News::class, 'create']);    
$routes->get('news/(:segment)', [News::class, 'show']);


$routes->get('/', [HomeController::class, 'index']);
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);
