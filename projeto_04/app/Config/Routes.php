<?php

use CodeIgniter\Router\RouteCollection;

/*
 * @var RouteCollection $routes
 */

// http verbes: get, post, put, delete, options, patch, head

// Default Controller: Main
$routes->get('/', 'MainController::index', []);
$routes->get('falar/(:any)', 'MainController::falar/$1', []);
