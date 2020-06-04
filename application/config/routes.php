<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['jobs/index'] = 'jobs/index';
$route['jobs/create'] = 'jobs/create';
//$route['jobs/update'] = 'jobs/update';
$route['jobs/(:any)'] = 'jobs/view/$1';
$route['jobs'] = 'jobs/index';

$route['category/index'] = 'category/index';
$route['category/create'] = 'category/create';
$route['category/(:any)'] = 'category/view/$1';
$route['category'] = 'category/index';

$route['blogs/index'] = 'blogs/index';
$route['blogs/create'] = 'blogs/create';
$route['blogs/(:any)'] = 'blogs/view/$1';
$route['blogs'] = 'blogs/index';

$route['information'] = 'information/index';
$route['information/(:any)'] = 'information/$1';


$route['default_controller'] = 'user_registration/index';

$route['(:any)'] = 'user_registration/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
