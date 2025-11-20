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
$routes->get('/retos', 'Home::retos');
$routes->get('/recompensas', 'Home::recompensas');
$routes->get('/progreso', 'Home::progreso');
$routes->get('/actividades', 'Home::actividades');
$routes->get('/perfil', 'Home::perfil');
