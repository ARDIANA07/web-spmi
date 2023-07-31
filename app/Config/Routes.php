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
$routes->setDefaultController('Login');
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

//method admin
$routes->get('/pengguna', 'Pengguna::index');
$routes->get('/', 'Auth::index');
$routes->get('/admin', 'Pengguna::index');
$routes->get('/home', 'Home::index');
$routes->get('/tahun', 'Tahun::index');
$routes->get('/profile', 'Profile::index');
$routes->get('/Ppepp', 'PPEPP::index');
$routes->get('/laporan', 'Laporan::index');
$routes->get('/auth', 'Auth::index');
$routes->get('/auth/login', 'Auth::loginProsess');
$routes->get('/akses', 'Akses::index');

$routes->resource('pengguna');
$routes->resource('tahun');
$routes->resource('profile');
$routes->resource('Ppepp');
$routes->resource('laporan');
$routes->resource('akses');

//methode user
$routes->get('/userhome', 'UserHome::index');
$routes->get('/ppeppuser', 'PpeppUser::index');
$routes->resource('userhome');
$routes->resource('ppeppuser');

//method editor
$routes->get('/edithome', 'EditHome::index');
$routes->get('/ppeppedit', 'PpeppEdit::index');
$routes->resource('edithome');
$routes->resource('ppeppedit');

//method verifikator
$routes->get('/verifhome', 'VerifHome::index');
$routes->get('/ppeppverifikator', 'PpeppVerifikator::index');
$routes->resource('verifhome');
$routes->resource('ppeppverifikator');

//method auth

$routes->get('/register', 'Register::index');
$routes->post('admin/login/process_login', 'Login::process_login');
$routes->get('/admin/login', 'Login_Admin::index');
$routes->get('/user/login', 'Login_User::index');
$routes->get('/editor/login', 'Login_Editor::index');
$routes->get('/verif/login', 'Login_Verif::index');
$routes->post('/register/create', 'Register::save');



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