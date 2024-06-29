<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/ejercicio1', 'controllerOne::method1');
$routes->get('/EJERCICIO2', 'controllerOne::method2');
$routes->get('/EjErCiSiO3', 'controllerTwo::method3');
$routes->get('/eJeRcIsIo4', 'controllerTwo::method4');
