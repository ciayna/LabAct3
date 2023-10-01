<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/home', 'UserController::index');
$routes->get('/adminview', 'UserController::adminview');
$routes->get('/registerview', 'UserController::registerview');
$routes->post('/register', 'UserController::register');
$routes->get('/signin', 'UserController::Login');
$routes->post('/LoginAuth', 'UserController::LoginAuth');


