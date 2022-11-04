<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
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
$routes->get('login','Auth::index');
$routes->get('logout','Auth::logout');
$routes->post('login','Auth::proses');
$routes->get('daftar', 'Auth::registrasi');
$routes->post('/proses_daftar', 'Auth::proses_daftar');
$routes->get('/', 'Home::index',['filter'=> 'authGuard']);
$routes->get('buku', 'BukuController::index',['filter' => 'authGuard']);
$routes->get('buku/tambah/','BukuController::tambah',['filter'=> 'authGuard']);
$routes->post('buku/tambah_proses', 'BukuController::tambah_proses');
$routes->get('buku/edit/(:num)','BukuController::edit/$1',['filter'=> 'authGuard']);
$routes->post('buku/edit_proses/(:num)','BukuController::edit_proses/$1');
$routes->get('buku/delete/(:num)', 'BukuController::delete/$1');
$routes->get('kategori', 'KategoriController::index',['filter'=> 'authGuard']);
$routes->get('kategori/tambah', 'KategoriController::tambah',['filter'=> 'authGuard']);
$routes->post('kategori/tambah_proses/','KategoriController::proses');
$routes->get('kategori/edit/(:num)','KategoriController::edit/$1',['filter'=> 'authGuard']);
$routes->post('kategori/edit_proses/(:num)','KategoriController::edit_proses/$1');
$routes->get('kategori/delete/(:num)','KategoriController::delete/$1');
$routes->get('anggota', 'Anggota::index',['filter'=> 'authGuard']);
$routes->get('anggota/tambah', 'Anggota::tambah',['filter'=> 'authGuard']);
$routes->post('anggota/tambah_proses', 'Anggota::proses');
$routes->get('anggota/edit/(:num)','Anggota::edit/$1',['filter'=> 'authGuard']);
$routes->post('anggota/edit_proses/(:num)', 'Anggota::edit_proses/$1');
$routes->get('anggota/delete/(:num)','Anggota::delete/$1');
$routes->get('peminjam', 'Peminjam::index',['filter'=> 'authGuard']);
$routes->get('peminjam/tambah/','Peminjam::tambah',['filter'=> 'authGuard']);
$routes->post('peminjam/tambah_proses/','Peminjam::proses');
$routes->get('peminjam/edit/(:num)','Peminjam::edit/$1',['filter'=> 'authGuard']);
$routes->post('peminjam/edit_proses/(:num)','Peminjam::edit_proses/$1');
$routes->get('peminjam/delete/(:num)','Peminjam::delete/$1');
$routes->post('pilih', 'Front::proses');
// $routes->get('peminjam/tambah', 'Peminjam::tambah');

// $routes->get('pinjam', 'PinjamController::index');
$routes->get('kembali', 'Kembali::index');
$routes->get('/front', 'Front::index');


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
