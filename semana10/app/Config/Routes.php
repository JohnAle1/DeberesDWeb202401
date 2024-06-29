<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//RUTA PARA TESTEO DE BDD
$routes->get('/testeodb', 'Cbdd::testbdd');
$routes->get('/selectinventario', 'Cbdd::Select_Controlador_bdd');
