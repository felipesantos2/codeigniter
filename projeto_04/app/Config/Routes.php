<?php

use CodeIgniter\Router\RouteCollection;

/*
 * @var RouteCollection $routes
 */

// http verbes: get, post, put, delete, options, patch, head

// Default Controller: Main
$routes->get('/', 'MainController::index', []);

$routes->get('falar/(:any)', 'MainController::falar/$1', []);

$routes->get('teste1/(:any)', 'MainController::ph_any/$1/$2'); // placehoder required

$routes->get('teste2/(:segment)', 'MainController::ph_segment/$1'); // unique placeholder

$routes->get('teste3/(:num)/(:num)', 'MainController::ph_num/$1/$2'); // numeric placeholder
