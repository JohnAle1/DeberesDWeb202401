<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/(:segment)', 'Home::returnCatalogo/$1');
$routes->get('/(:segment)/(:segment)', 'Home::categoria/$1/$2');
