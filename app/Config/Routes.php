<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Menu::index');

$routes->get('ver_regiones', 'Regiones::index');

$routes->get('ver_municipios', 'Municipios::index');

//CIUDADANOS
$routes->get('ver_ciudadanos', 'Ciudadanos::index');
$routes->post('agregar_ciudadano', 'Ciudadanos::agregarCiudadano');
$routes->get('nuevo_ciudadano', 'Ciudadanos::nuevoCiudadano');
$routes->get('eliminar_ciudadano/(:num)', 'Ciudadanos::eliminarCiudadano/$1');

$routes->get('ver_departamentos', 'Departamentos::index');

$routes->get('ver_nivelesacad', 'NivelesAcademicos::index');