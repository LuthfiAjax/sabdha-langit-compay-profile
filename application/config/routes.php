<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'Hero';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['blog'] = 'Hero/blog';
$route['blog/(:any)'] = 'Hero/single_blog/$1';

$route['tentang-kami'] = 'Hero/about';
$route['layanan'] = 'Hero/layanan';
$route['layanan/event-organizer'] = 'Hero/event_organizer';
$route['layanan/multimedia'] = 'Hero/multimedia';
$route['layanan/property-event'] = 'Hero/property_event';
$route['layanan/photography'] = 'Hero/photography';

$route['hubungi'] = 'Hero/hubungi';

$route['post/message'] = 'Hero/message';