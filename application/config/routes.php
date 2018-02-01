<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['default_controller'] = 'Main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// login routes
$route['main/update'] = 'main/update';
$route['register'] = 'login/register';
$route['login'] = 'login';
$route['login/enter'] = 'login/enter';
$route['logout'] = 'login/logout';
$route['main/records'] = 'main/records';
$route['main/view'] = 'main/view';
$route['login/register_admin'] = 'login/register_admin';

