<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'home';
$route['login'] = "paneladmin/login";
$route['layanan'] = "product/index";
$route['layanan/(:any)'] = "product/product_category/$1";
$route['layanan-detail/(:any)'] = "product/detail/$1";
$route['about'] = "about/index";
$route['workshop'] = "workshop/index";
$route['galeri'] = "gallery/index";

$route['reviews'] = "reviews/index";
$route['equipment'] = "equipment/index";
$route['services'] = "services/index";
$route['services/(:any)'] = "services/detail/$1";
$route['blogs'] = "blogs/index";
$route['blogs/(:any)'] = "blogs/detail/$1";
$route['404_override'] = 'Notfound';
$route['translate_uri_dashes'] = FALSE;
$route['petacrawl\.xml'] = "petacrawl";
