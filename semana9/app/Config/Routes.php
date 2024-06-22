<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/vista1', 'Home::returnVista1');
$routes->get('/vista2', 'Home::returnVista2');
$routes->get('/vista3', 'Home::returnVista3');
//ESTA ES LA RUTA CON VARIABLE
$routes->get('/vista4/(:num)', 'Home::returnVista4/$1');

//ESTA VA SER LA RUTA CATALOGO
$routes->get('/catalogo/(:any)', 'Home::returnCatalogo/$1');

//ESTA VA A SER LA RUTA DE VESTIDOS
$routes->get('/vestidos/(:any)', 'Home::returnVestidos/$1');

//ESTA VA A SER LA RUTA DE ZAPATOS
$routes->get('/zapatos/(:any)', 'Home::returnZapatos/$1');

//RUTA DE LA BDD
$routes->get('/testbase', 'Home::testdb');



