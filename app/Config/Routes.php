<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('ver_regiones', 'Regiones::index');
$routes->get('ver_municipios', 'Municipios::index');