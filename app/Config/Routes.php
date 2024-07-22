<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('head_view', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acerca_de', 'Home::acerca_de');
$routes->get('header', 'Home::header');
$routes->get('estilos', 'Home::estilos');
$routes->get('principal_ultimo', 'Home::principal_ultimo');
$routes->get('tienda', 'Home::tienda');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');


/*Rutas Registro de usuario*/

$routes->get('registro','usuario_controller::create');
$routes->post('/enviar-form', 'usuario_controller::formValidation');

/*Rutas login*/

$routes->get('login','login_controller');
$routes->post('/enviarlogin','login_controller::auth');
$routes->get('/panel','Panel_controller::index',['filter' => 'auth']);
$routes->get('/logout','login_controller::logout');
