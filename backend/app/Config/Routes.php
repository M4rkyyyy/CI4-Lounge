<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/sign-in', 'Users::signIn');
$routes->get('/roadmap', 'Users::roadmap');
$routes->get('/moodboard', 'Users::moodboard');

