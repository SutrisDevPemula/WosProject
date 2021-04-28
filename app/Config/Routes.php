<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/ekspedisi', 'Ekspedisi::showEkspedisi');
$routes->post('/ekspedisi/add', 'Ekspedisi::addEkspedisi');
$routes->get('/task', 'Task::index');
// $routes->get('/tipe_motor', 'Ekspedisi::search_typeMotor');
$routes->get('/task/(:segment)/detail', 'Task::viewTask/$1');

$routes->get('/task/(:segment)/check', 'Ekspedisi::checking/$1');
$routes->post('/task/(:segment)/search', 'Ekspedisi::search_ekspedisi/$1');
$routes->get('/desKerusakan', 'Ekspedisi::def_kerusakan');
$routes->get('/dafKerusakan', 'Task::def_kerusakan');

$routes->post('/search_kerusakan', 'Ekspedisi::search_kerusakan');

$routes->get('/task/(:segment)/checking', 'Task::check/$1');
$routes->get('/defect/(:segment)/check', 'Task::defect_check/$1');

$routes->get('/search_cek', 'Task::search_check');
$routes->get('/preview', 'Task::previewKerusakan');
// $routes->get('/dtlekspedisi', 'Ekspedisi::showDetails');
// $routes->resources('ekspedisi');

$routes->group('admin', function ($routes) {
	$routes->get('admin', 'Admin::index');
});

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
