<?php

use CodeIgniter\Router\RouteCollection;

/*
 * @var RouteCollection $routes
 */
$routes->get('/', 'MainController::index');
$routes->get('/products', 'MainController::products');
$routes->get('/where_we_are', 'MainController::where_we_are');
