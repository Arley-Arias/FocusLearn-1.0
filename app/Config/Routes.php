<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$route['default_controller'] = 'pagina/inicio';
$routes->get('detalis', 'Details::details');
$routes->get('/privacy', 'Home::privacy');
$routes->get('/terms', 'Home::terms');
<<<<<<< HEAD
$routes->get('/', 'Inicio::index');
$routes->get('/retos', 'Home::retos');
$routes->get('/recompensas', 'Home::recompensas');
$routes->get('/progreso', 'Home::progreso');
$routes->get('/actividades', 'Home::actividades');
$routes->get('/perfil', 'Home::perfil');
$routes->get('/logros', 'Home::logros');
$routes->get('/ranking', 'Home::ranking');
$routes->get('/preguntas', 'Home::preguntas');
$routes->get('/curso', 'Home::curso');
$routes->get('/configuracion', 'Home::configuracion');
$routes->get('/registro', 'RegistroController::index');
$routes->post('/registro/guardar', 'RegistroController::guardar');
$routes->get('/registro', 'RegistroController::index');
$routes->get('/curso', 'CursoController::index');
$routes->get('/preguntas', 'PreguntasController::index');
$routes->get('/registro', 'RegistroController::index');
$routes->get('/curso', 'CursoController::index');
$routes->get('/preguntas', 'PreguntasController::index');
$routes->get('/', 'PreguntasController::index');
$routes->get('descubrir', 'Home::descubrir');

=======
$routes->get('/', 'Inicio::index');
>>>>>>> 7a33f26d9ffa7583bac48430059228e2ef0a8ad1
