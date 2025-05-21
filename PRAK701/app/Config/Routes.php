<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Auth::login');

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::loginProcess');

$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::registerProcess');

$routes->get('/logout', 'Auth::logout');

$routes->get('/dashboard', 'Dashboard::index');

$routes->get('/book', 'Book::index');
$routes->get('/book/create', 'Book::create');
$routes->post('/book/store', 'Book::store');
$routes->get('/book/edit/(:num)', 'Book::edit/$1');
$routes->post('/book/update/(:num)', 'Book::update/$1');
$routes->get('/book/delete/(:num)', 'Book::delete/$1');