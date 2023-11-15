<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'SignupController::index');
$routes->get('/signup', 'SignupController::index');
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/signin', 'SigninController::index');
$routes->get('/profile', 'ProfileController::index',['filter' => 'authGuard']);
$routes->get('admin', 'ProfileController::admin');
//$routes->match(['get', 'post'],'VuelosController/subirvuelos', 'VuelosController::subirvuelos');
$routes->get('VuelosController/vistasubirvuelos', 'VuelosController::vistasubirvuelos');
$routes->match(['get', 'post'],'VuelosController/formulariovuelo', 'VuelosController::formulariovuelo');
$routes->post('VuelosController/subirvuelos', 'VuelosController::subirvuelos');
$routes->get('VuelosController/destinos', 'VuelosController::destinos');
$routes->get('pagina_reserva/(:num)', 'Reserva::procesar/$1');
$routes->get('confirmar_reserva', 'Reserva::datossubidos');
$routes->post('procesado', 'Reserva::datossubidos');
$routes->post('/confirmar','VuelosController::confirmar');

