<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//http://localhost/Parcial2DW/Index1-CVistaF1
$routes->get('/Index1-CVistaF1', 'CVistas::MMostrar1');

//http://localhost/Parcial2DW/Index2-CFormF1
$routes->get('/Index2-CFormF1', 'CForms::MMostrar1');

//http://localhost/Parcial2DW/Index3-CResultF1
$routes->get('/Index3-CResultF1', 'CResultado::MMostrar1');