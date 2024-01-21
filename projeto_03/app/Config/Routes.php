<?php

use CodeIgniter\Router\RouteCollection;

/*
 * @var RouteCollection $routes
 */

// http verbes: get, post, put, delete, options, patch, head

// default controller: Main
$routes->get('/', 'Main::index');

$routes->get('/pagina_1', 'Main::pagina_1');

$routes->get('pagina_2', 'Main::pagina_2');
