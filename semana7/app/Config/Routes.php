<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/ejercicio1', 'Controlleruno::metodo1');
$routes->get('/ejercicio2', 'Controlleruno::metodo2');
$routes->get('/ejercicio3', 'CONTROLLERDOS::metodo3');
$routes->get('/ejercicio4', 'CONTROLLERDOS::metodo4');
