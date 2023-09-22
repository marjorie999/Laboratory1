<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('test', 'MainController::test');
$routes->post('save', 'MainController::save');
$routes->get('/delete/(:any)', 'MainController::delete/$1');
$routes->get('/edit/(:any)', 'MainController::edit/$1');