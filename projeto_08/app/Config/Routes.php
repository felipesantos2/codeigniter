<?php

use CodeIgniter\Router\RouteCollection;

/*
 * @var RouteCollection $routes
 */

$routes->get('/', 'MainController::index');

$routes->get('/products', 'MainController::products');

$routes->get('/where_we_are', 'MainController::where_we_are');

$routes->get('/pagina_3/(:any)', 'MainController::pagina_3/$1');

$routes->get('/pagina_3', function () {
    echo 'Felipe';
});
