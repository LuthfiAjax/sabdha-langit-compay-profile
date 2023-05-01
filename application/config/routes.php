<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'hero';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['blog'] = 'hero/blog';
$route['blog/(:any)'] = 'hero/single_blog/$1';

$route['tentang-kami'] = 'hero/about';

$route['post/message'] = 'hero/message';