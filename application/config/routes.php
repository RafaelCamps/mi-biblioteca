<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*

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

$route['categorias/(:any)'] = 'categorias_C/view/$1';
$route['categorias'] = 'categorias_C';

$route['libros/update'] = 'libros_ctrl/update';
$route['libros/borrar/(:any)'] = 'libros_ctrl/delete/$1';
$route['libros/editar/(:any)'] = 'libros_ctrl/edit/$1';
$route['libros/nuevo'] = 'libros_ctrl/create';
$route['libros/(:any)'] = 'libros_ctrl/view/$1';
$route['libros'] = 'libros_ctrl';

$route['(:any)'] = 'pages_ctrl/view/$1';
$route['default_controller'] = 'pages_ctrl/view';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
