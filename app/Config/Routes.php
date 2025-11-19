<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$route['default_controller'] = 'pagina/inicio';
$routes->get('detalis', 'Details::details');
$routes->get('/privacy', 'Home::privacy');
$routes->get('/terms', 'Home::terms');
$routes->get('/', 'Inicio::index');