<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Admin');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/auth', 'Admin::login');
$routes->post('/register', 'AuthController::register');
$routes->get('/register', 'Admin::register');
$routes->post('/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');

// ADMIN
$routes->get('/admin_dashboard', 'Admin::dashboard', ['filter' => 'auth']);
$routes->get('/admin_verifikasi', 'Admin::verifikasi', ['filter' => 'auth']);
$routes->get('/admin_terima', 'Admin::terima', ['filter' => 'auth']);
$routes->get('/admin_tolak', 'Admin::tolak', ['filter' => 'auth']);
$routes->get('/surat/(:any)', 'Admin::detail/$1', ['filter' => 'auth']);
$routes->get('/status/(:segment)/(:num)', 'Admin::status/$1/$2', ['filter' => 'auth']);

// USER
$routes->post('/pengajuan/(:segment)', 'SuratController::pengajuan/$1');
$routes->get('/', 'Main::beranda');
$routes->get('/surat_usaha', 'Main::usaha');
$routes->get('/surat_domisili_usaha', 'Main::domusaha');
$routes->get('/surat_sktm', 'Main::sktm');
$routes->get('/surat_penghasilan', 'Main::penghasilan');
$routes->get('/surat_bedaidentitas', 'Main::bedaidentitas');
$routes->get('/surat_ktp', 'Main::ktp');
$routes->get('/surat_kematian', 'Main::kematian');
$routes->get('/surat_kelahiran', 'Main::kelahiran');
$routes->get('/surat_skck', 'Main::skck');
$routes->get('/surat_kehilangan', 'Main::kehilangan');
$routes->get('/surat_domisili', 'Main::domisili');
$routes->get('/surat_keterangan', 'Main::keterangan');
$routes->get('/kontak', 'Main::kontak');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
