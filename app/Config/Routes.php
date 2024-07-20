<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 //MENU
$routes->get('/', 'Menu::index');

// CIUDADANOS
$routes->get('ver_ciudadanos', 'Ciudadanos::index');
$routes->post('agregar_ciudadano', 'Ciudadanos::agregarCiudadano');
$routes->get('nuevo_ciudadano', 'Ciudadanos::nuevoCiudadano');
$routes->get('eliminar_ciudadano/(:num)', 'Ciudadanos::eliminarCiudadano/$1');

//DEPARTAMENTOS
$routes->get('ver_departamentos', 'Departamentos::index');
$routes->post('agregar_departamento', 'Departamentos::agregarDepartamento');
$routes->get('nuevo_departamento', 'Departamentos::nuevoDepartamento');
$routes->get('eliminar_departamento/(:num)', 'Departamentos::eliminarDepartamento/$1');



//MUNICIPIOS
$routes->get('ver_municipios', 'Municipios::index');
$routes->post('agregar_municipio', 'Municipios::agregarMunicipio');
$routes->get('nuevo_municipio', 'Municipios::nuevoMunicipio');
$routes->get('eliminar_municipio/(:num)', 'Municipios::eliminarMunicipio/$1');


//NIVELES ACADEMICOS 
$routes->get('ver_nivelesacad', 'NivelesAcademicos::index');
$routes->post('agregar_nivel_acad', 'NivelesAcademicos::agregarNivelAcademico');
$routes->get('nuevo_nivel_acad', 'NivelesAcademicos::nuevoNivelAcademico');
$routes->get('eliminar_nivelacad/(:num)', 'NivelesAcademicos::eliminarNivelAcad/$1');

//REGIONES
$routes->get('ver_regiones', 'Regiones::index');
$routes->post('agregar_region', 'Regiones::agregarRegion');
$routes->get('nueva_region', 'Regiones::nuevaRegion');
$routes->get('eliminar_region/(:num)', 'Regiones::eliminarRegion/$1');

