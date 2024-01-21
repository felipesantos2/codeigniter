<?php

use CodeIgniter\Router\RouteCollection;

/*
 * @var RouteCollection $routes
 */

// http verbes: get, post, put, delete, options, patch, head

// Default Controller: Main
$routes->get('/', 'Main::index', []);

$routes->get('/pagina_1', 'Main::pagina_1', []);

$routes->get('/pagina_2', 'Main::pagina_2', []);

$routes->post('/login', 'Main::formulario_login');

$routes->match(['get, post'], '/login', 'Main::formulario_login');

$routes->get('user/id', 'Main::ver_user/100');
