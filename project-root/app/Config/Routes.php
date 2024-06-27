<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//ruta testeo bdd
$routes->get('/tesdb', 'CBbdd::testbdd');

$routes->get('/inv', 'CBbdd::Select_Controlador_bdd');
