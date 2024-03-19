<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/', 'Test_view::index');
$routes->get('/login', 'AuthController::index');
$routes->get('/dashboard', 'DashboardController::index');
