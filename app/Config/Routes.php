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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('home', 'Home::index');
$routes->add('login', 'Home::login');
$routes->add('olimpiade', 'Home::olimpiade');
// $routes->add('daftar', 'Home::daftar');
$routes->get('logout', 'Home::logout');

// data
$routes->add('editdata', 'Home::editdata');
$routes->add('pengguna', 'Home::ambil');
$routes->add('hapussertifikat', 'Home::hapussertifikat');
$routes->add('hapusbuktidaftar', 'Home::hapusbuktidaftar');
$routes->add('gantisertifikat', 'Home::gantisertifikat');
$routes->add('gantibuktidaftar', 'Home::gantibuktidaftar');
$routes->add('hapusdata/(:num)', 'Home::hapusdata');


// kompetisi
$routes->add('tambahkompetisi', 'Home::tambahkompetisi');
$routes->add('editkompetisi', 'Home::editkompetisi');
$routes->add('updatekompetisi', 'Home::updatekompetisi');
$routes->get('hapuskompetisi/(:num)', 'Home::hapuskompetisi');


$routes->get('kompetisi', 'Home::kompetisi');
$routes->add('dashboard', 'Home::dashboard');
$routes->get('profil', 'Home::profil');
/**
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
