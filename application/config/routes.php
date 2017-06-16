<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';


$route['article/search'] = 'article/search';
$route['article/save'] = 'article/save';
$route['article/(:any)'] = 'article/index/$1';

$route['login'] = 'account/login';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
