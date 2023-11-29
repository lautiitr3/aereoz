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
$routes->get('/profile', 'ProfileController::index',);
$routes->get('admin', 'ProfileController::admin',['filter' => 'Adminfiltro']);
//$routes->match(['get', 'post'],'VuelosController/subirvuelos', 'VuelosController::subirvuelos');
$routes->get('VuelosController/vistasubirvuelos', 'VuelosController::vistasubirvuelos',['filter' => 'Adminfiltro']);
$routes->match(['get', 'post'],'VuelosController/formulariovuelo', 'VuelosController::formulariovuelo',['filter' => 'authGuard'],['filter' => 'Adminfiltro']);
$routes->post('VuelosController/subirvuelos', 'VuelosController::subirvuelos');
$routes->get('procesarBusqueda', 'VuelosController::procesarBusqueda',);
$routes->get('VuelosController/destinos', 'VuelosController::destinos',);
$routes->get('pagina_reserva/(:num)', 'Reserva::procesar/$1',['filter' => 'authGuard']);
$routes->get('confirmar_reserva', 'Reserva::datossubidos',['filter' => 'authGuard']);
$routes->post('procesado', 'Reserva::datossubidos',['filter' => 'authGuard']);
$routes->post('/confirmar','VuelosController::confirmar',['filter' => 'authGuard']);
$routes->get('/logout', 'SigninController::logout');
$routes->get('/reserva','Reserva::reserva',['filter' => 'authGuard']);
$routes->get('/boardingpass','PdfController::boardingpass');