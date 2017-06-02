<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['about'] = 'homeController/about';
$route['contact'] = 'homeController/contact';
$route['admin'] = 'AdminController';
$route['titleslogan'] = 'adminController/titleslogan';
$route['copyright'] = 'adminController/copyright';
$route['social'] = 'adminController/social';
$route['addcat'] = 'adminController/addcat';
$route['catlist'] = 'adminController/catlist';
