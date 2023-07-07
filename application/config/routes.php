<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['admin/logout'] = 'login/keluar';
$route['admin'] = '404_override';
$route['admin/index'] = '404_override';
$route['admin/dashboard'] = 'admin/index';
$route['admin/indeks/new'] = 'admin/indeks_add';
$route['admin/indeks/edit/(:num)'] = 'admin/indeks_edit/$1';
$route['admin/indeks/hapus/(:num)'] = 'admin/indeks_del/$1';
$route['admin/indeks/kosongkan'] = 'admin/indeks_kosongkan';
$route['admin/kuesioner/new'] = 'admin/kuesioner_add';
$route['admin/kuesioner/edit/(:any)'] = 'admin/kuesioner_edit/$1';
$route['admin/kuesioner/hapus/(:any)'] = 'admin/kuesioner_del/$1';
$route['admin/kuesioner/jawaban/(:any)'] = 'admin/kuesioner_answ/$1';
$route['admin/kuesioner/kosongkan'] = 'admin/kuesioner_kosongkan';
$route['admin/jawaban/new'] = 'admin/jawaban_add';
$route['admin/jawaban/edit/(:num)'] = 'admin/jawaban_edit/$1';

$route['admin/master/mata-kuliah'] = 'admin/makul';
$route['admin/master/mata-kuliah/new'] = 'admin/makul_add';
$route['admin/master/mata-kuliah/edit/(:num)'] = 'admin/makul_edit/$1';
$route['admin/master/mata-kuliah/hapus/(:num)'] = 'admin/makul_del/$1';
$route['admin/master/mata-kuliah/kosongkan'] = 'admin/makul_kosongkan';

$route['admin/master/prodi'] = 'admin/prodi';
$route['admin/master/prodi/new'] = 'admin/prodi_add';
$route['admin/master/prodi/edit/(:num)'] = 'admin/prodi_edit/$1';
$route['admin/master/prodi/hapus/(:num)'] = 'admin/prodi_del/$1';
$route['admin/master/prodi/kosongkan'] = 'admin/prodi_kosongkan';

$route['admin/master/mahasiswa'] = 'admin/mahasiswa';
$route['admin/master/mahasiswa/new'] = 'admin/mahasiswa_add';
$route['admin/master/mahasiswa/edit/(:num)'] = 'admin/mahasiswa_edit/$1';
$route['admin/master/mahasiswa/hapus/(:num)'] = 'admin/mahasiswa_del/$1';
$route['admin/master/mahasiswa/kosongkan'] = 'admin/mahasiswa_kosongkan';
$route['admin/responden/lihat/(:any)'] = 'admin/respo_show/$1';
$route['admin/responden/print/(:any)'] = 'admin/respo_print/$1';
$route['admin/notifikasi/baca/(:any)'] = 'admin/notip_read/$1';
$route['admin/notifikasi/kosongkan'] = 'admin/notip_kosongkan';
$route['admin/kritik-saran'] = 'admin/kritik';
$route['admin/kritik-saran/baca/(:any)'] = 'admin/kritik_read/$1';
$route['admin/kritik-saran/kosongkan'] = 'admin/kritik_kosongkan';

$route['admin/laporan/responden'] = 'admin/lap_responden';
$route['admin/laporan/responden/print'] = 'admin/lap_responden_print';
$route['admin/laporan/responden/excel'] = 'admin/lap_responden_excel';

$route['admin/grafik/kuesioner'] = 'admin/grafik_kuesioner';
$route['admin/grafik/prodi'] = 'admin/grafik_prodi';

$route['contactForm'] = 'home/send_pesan';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['user/logout'] = 'login/keluar_mhs';
$route['user/login'] = 'login/login_mhs';
$route['user/indeks/(:num)'] = 'user/kuesioner_answ/$1';
$route['user/indeks/submit/(:any)/(:num)'] = 'user/kuesioner_submit/$1/$2';
$route['user/kritik-saran'] = 'user/kritik';
