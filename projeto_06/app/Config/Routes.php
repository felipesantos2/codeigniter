<?php

use CodeIgniter\Router\RouteCollection;

/*
 * @var RouteCollection $routes
 */

// MathController
$routes->get('adicao/(:num)/(:num)', 'MathController::add/$1/$2');
$routes->get('subtracao/(:num)/(:num)', 'MathController::sub/$1/$2');
$routes->get('multiplicacao/(:num)/(:num)', 'MathController::mult/$1/$2');
$routes->get('divisao/(:num)/(:num)', 'MathController::divide/$1/$2');

// TalkController
$routes->get('palavra/(:alpha)', 'TalkController::word/$1');
$routes->get('palavras/(:alpha)/(:alpha)', 'TalkController::words/$1/$2');

$routes->get('outro/(:alpha)', 'TalkController::other/$1');
$routes->get('outro', 'TalkController::other'); // route with default value

// controller/view/model

// view route
$routes->view('/', 'index');

$routes->view('pagina1/(:any)', 'index');
