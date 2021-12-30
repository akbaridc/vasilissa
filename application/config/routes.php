<?php
defined('BASEPATH') or exit('No direct script access allowed');

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

// route login
$route['login/pihak'] = 'Admin/Auth';
$route['login_admin'] = 'Admin/Auth/login';
$route['logout_admin'] = 'Admin/Auth/logout_admin';

$route['login/member'] = 'Member/Auth';
$route['login/pihak/lupa-password'] = 'Admin/Auth/forgot_password';
// end route login

// route untuk admin master
$route['master-admin'] = 'Admin/AdminMaster/Dashboard';

$route['master-admin/DataUser'] = 'Admin/AdminMaster/DataUser';

$route['master-admin/DataProduk'] = 'Admin/AdminMaster/DataProduk';
$route['master-admin/json_produk'] = 'Admin/AdminMaster/DataProduk/json_produk';

$route['master-admin/DataReward'] = 'Admin/AdminMaster/DataReward';

$route['master-admin/DataMember'] = 'Admin/AdminMaster/DataMember';
$route['master-admin/DataMember/TrackingLevelMember'] = 'Admin/AdminMaster/DataMember/TrackingLevelMember';
$route['master-admin/DataMember/UserMember'] = 'Admin/AdminMaster/DataMember/UserMember';

$route['master-admin/LaporanProduk'] = 'Admin/AdminMaster/LaporanProduk';
$route['master-admin/LaporanOmset'] = 'Admin/AdminMaster/LaporanOmset';

$route['master-admin/TransaksiProduk'] = 'Admin/AdminMaster/TransaksiProduk';

$route['master-admin/TransaksiWithdrawReward'] = 'Admin/AdminMaster/TransaksiWithdrawReward';

$route['master-admin/akun'] = 'Admin/AdminMaster/SettingAkun';
$route['master-admin/edit_akun'] = 'Admin/AdminMaster/SettingAkun/edit';
$route['master-admin/edit_password'] = 'Admin/AdminMaster/SettingAkun/edit_password';
//end route admin master

// route untuk admin biasa
$route['admin'] = 'Admin/AdminBiasa/Dashboard';

$route['admin/DataUser'] = 'Admin/AdminBiasa/DataUser';
$route['admin/user/jsonData'] = 'Admin/AdminBiasa/DataUser/jsonData';
$route['admin/DataUser/tambah'] = 'Admin/AdminBiasa/DataUser/tambah';
$route['admin/DataUser/edit/(:any)'] = 'Admin/AdminBiasa/DataUser/edit/$1';
$route['admin/edit_user'] = 'Admin/AdminBiasa/DataUser/edit_user';
$route['admin/tambah_user'] = 'Admin/AdminBiasa/DataUser/tambah_user';
$route['admin/is_member/(:any)'] = 'Admin/AdminBiasa/DataUser/is_member/$1';
$route['admin/hapus_user/(:any)'] = 'Admin/AdminBiasa/DataUser/hapus_user/$1';

$route['admin/DataProduk'] = 'Admin/AdminBiasa/DataProduk';
$route['admin/get_kode_produk'] = 'Admin/AdminBiasa/DataProduk/get_kode_produk';
$route['admin/jsonData'] = 'Admin/AdminBiasa/DataProduk/jsonData';
$route['admin/get_kode_produk_edit'] = 'Admin/AdminBiasa/DataProduk/get_kode_produk_edit';
$route['admin/DataProduk/tambah'] = 'Admin/AdminBiasa/DataProduk/tambah';
$route['admin/tambah_produk'] = 'Admin/AdminBiasa/DataProduk/tambah_produk';
$route['admin/DataProduk/edit/(:any)'] = 'Admin/AdminBiasa/DataProduk/edit/$1';
$route['admin/foto_produk/(:any)'] = 'Admin/AdminBiasa/DataProduk/foto_produk/$1';
$route['admin/tambah_foto_proses'] = 'Admin/AdminBiasa/DataProduk/tambah_foto_proses';
$route['admin/edit_produk'] = 'Admin/AdminBiasa/DataProduk/edit_produk';
$route['admin/hapus_foto_produk/(:any)/(:any)'] = 'Admin/AdminBiasa/DataProduk/hapus_foto_produk/$1/$1';
$route['admin/hapus_produk/(:any)'] = 'Admin/AdminBiasa/DataProduk/hapus_produk/$1';
$route['admin/nonaktif_produk/(:any)'] = 'Admin/AdminBiasa/DataProduk/nonaktif_produk/$1';
$route['admin/aktif_produk/(:any)'] = 'Admin/AdminBiasa/DataProduk/aktif_produk/$1';

$route['admin/DataReward'] = 'Admin/AdminBiasa/DataReward';
$route['admin/DataReward/tambah'] = 'Admin/AdminBiasa/DataReward/tambah';
$route['admin/tambah_reward'] = 'Admin/AdminBiasa/DataReward/tambah_reward';
$route['admin/edit_reward'] = 'Admin/AdminBiasa/DataReward/edit_reward';
$route['admin/json_reward'] = 'Admin/AdminBiasa/DataReward/json_reward';
$route['admin/DataReward/edit/(:any)'] = 'Admin/AdminBiasa/DataReward/edit/$1';
$route['admin/hapus_reward/(:any)'] = 'Admin/AdminBiasa/DataReward/hapus_reward/$1';
$route['admin/nonaktif_reward/(:any)'] = 'Admin/AdminBiasa/DataReward/nonaktif_reward/$1';
$route['admin/aktif_reward/(:any)'] = 'Admin/AdminBiasa/DataReward/aktif_reward/$1';

$route['admin/DataMember'] = 'Admin/AdminBiasa/DataMember';
$route['admin/DataMember/tambah'] = 'Admin/AdminBiasa/DataMember/tambah';
$route['admin/DataMember/edit'] = 'Admin/AdminBiasa/DataMember/edit';
$route['admin/DataMember/TrackingLevelMember'] = 'Admin/AdminBiasa/DataMember/TrackingLevelMember';
$route['admin/DataMember/UserMember'] = 'Admin/AdminBiasa/DataMember/UserMember';

$route['admin/TransaksiProduk'] = 'Admin/AdminBiasa/TransaksiProduk';
$route['admin/TransaksiProduk/tambah'] = 'Admin/AdminBiasa/TransaksiProduk/tambah';
$route['admin/TransaksiProduk/edit'] = 'Admin/AdminBiasa/TransaksiProduk/edit';

$route['admin/TransaksiWithdrawCash'] = 'Admin/AdminBiasa/TransaksiWithdrawCash';

$route['admin/TransaksiWithdrawReward'] = 'Admin/AdminBiasa/TransaksiWithdrawReward';

$route['admin/akun'] = 'Admin/AdminBiasa/SettingAkun';
$route['admin/edit_akun'] = 'Admin/AdminBiasa/SettingAkun/edit';
$route['admin/edit_password'] = 'Admin/AdminBiasa/SettingAkun/edit_password';

$route['admin/SettingWebsite'] = 'Admin/AdminBiasa/SettingWebsite';
$route['admin/SettingWebsite/nama_website'] = 'Admin/AdminBiasa/SettingWebsite/nama_website';
$route['admin/SettingWebsite/edit_nama_website'] = 'Admin/AdminBiasa/SettingWebsite/edit_nama_website';
$route['admin/SettingWebsite/logo'] = 'Admin/AdminBiasa/SettingWebsite/logo';
$route['admin/SettingWebsite/logoIcon'] = 'Admin/AdminBiasa/SettingWebsite/logoIcon';
$route['admin/SettingWebsite/sosmed'] = 'Admin/AdminBiasa/SettingWebsite/sosmed';
$route['admin/SettingWebsite/edit'] = 'Admin/AdminBiasa/SettingWebsite/edit';
$route['admin/SettingWebsite/hapus/(:num)'] = 'Admin/AdminBiasa/SettingWebsite/hapus/$1';
$route['admin/SettingWebsite/tentang'] = 'Admin/AdminBiasa/SettingWebsite/tentang';
$route['admin/SettingWebsite/kontak_website'] = 'Admin/AdminBiasa/SettingWebsite/kontak_website';
//end route admin biasa

// route untuk member
$route['member'] = 'Member/Dashboard';

$route['login_member'] = 'Member/Auth/login';
$route['logout_member'] = 'Member/Auth/logout_member';

$route['member/produk-paket'] = 'Member/DataProduk/paket';
$route['member/produk-paket/beli'] = 'Member/DataProduk/paket_tambah';
$route['member/FormPaket_tambah'] = 'Member/DataProduk/FormPaket_tambah';
$route['member/get_produk_paket'] = 'Member/DataProduk/get_produk_paket';
$route['member/json_paket'] = 'Member/DataProduk/json_paket';
$route['member/FormPaket_edit'] = 'Member/DataProduk/FormPaket_edit';
$route['member/uploadPembayaran_paket'] = 'Member/DataProduk/uploadPembayaran_paket';
$route['member/hapus_produk_paket/(:any)'] = 'Member/DataProduk/hapus_produk_paket/$1';

$route['member/produk-item'] = 'Member/DataProduk/item';
$route['member/produk-item/beli'] = 'Member/DataProduk/item_tambah';
$route['member/FormItem_tambah'] = 'Member/DataProduk/Formitem_tambah';
$route['member/get_produk_item'] = 'Member/DataProduk/get_produk_item';
$route['member/json_item'] = 'Member/DataProduk/json_item';
$route['member/FormItem_edit'] = 'Member/DataProduk/FormItem_edit';
$route['member/uploadPembayaran_item'] = 'Member/DataProduk/uploadPembayaran_item';
$route['member/hapus_produk_item/(:any)'] = 'Member/DataProduk/hapus_produk_item/$1';


$route['member/akun'] = 'Member/SettingAkun';
$route['member/edit_akun'] = 'Member/SettingAkun/edit';
$route['member/edit_password'] = 'Member/SettingAkun/edit_password';
// end route member

// route untuk user
$route['semua-produk'] = 'Home/SemuaProduk';
$route['produk-detail'] = 'Home/ProdukDetail';
$route['produk-detail/(:any)'] = 'Home/ProdukDetail/$1';
// end route user

// $route['member/DataProduk/paket/tambah'] = 'Member/DataProduk/paket_tambah';

$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
