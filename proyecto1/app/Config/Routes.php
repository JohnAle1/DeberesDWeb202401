<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/ejercicio1', 'Controlleruno::method1');
$routes->get('/EJERCICIO2', 'Controlleruno::method2');
$routes->get('/EjErCiSiO3', 'CONTROLLERDOS::method3');
$routes->get('/eJeRcIsIo4', 'CONTROLLERDOS::method4');
