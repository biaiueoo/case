<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('users', 'UserController::index');
$routes->get('users/create', 'UserController::create');
$routes->post('users/store', 'UserController::store');
// $routes->get('register', 'UserController::register');
// $routes->post('users/register', 'UserController::store');

$routes->get('api/products', 'ProductsController::index');

