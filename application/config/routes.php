<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "login/login";
$route['login'] = "login/login";
$route['home'] = "home/home";
$route['home/agregar_paciente'] = "home/home/formPaciente";
$route['home/listar_paciente'] = "home/home/formListarPaciente";
$route['home/actualizar_paciente/(:num)'] = "paciente/paciente/get/$1";
$route['home/eliminar_paciente/(:num)'] = "paciente/paciente/delete/$1";
$route['home/agregar_usuario'] = "home/home/formUsuario";
$route['home/listado_usuario'] = "home/home/formListarUsuario";
$route['home/actualizar_usuario/(:num)'] = "usuario/usuario/get/$1";
$route['home/eliminar_usuario/(:num)'] = "usuario/usuario/delete/$1";
$route['home/agregar_doctor'] = "home/home/formDoctor";
$route['home/actualizar_doctor/(:num)'] = "medico/medico/get/$1";
$route['home/eliminar_doctor/(:num)/(:any)'] = "medico/medico/delete/$1/$2";
$route['home/listado_doctor'] = "home/home/formListarDoctor";
$route['home/agregar_secretaria'] = "home/home/formSecretaria";
$route['home/listado_secretaria'] = "home/home/formListarSecretaria";
$route['home/actualizar_secretaria/(:num)'] = "secretaria/secretaria/get/$1";
$route['home/eliminar_secretaria/(:num)/(:any)'] = "secretaria/secretaria/delete/$1/$2";
$route['home/cita_medica'] = "home/home/cita_medica";
$route['home/cita_asignada'] = "home/home/cita_asignada";
$route['home/listar_cita/(:any)/(:any)'] = "cita/cita/getAll/$1/$2";
$route['home/agregar_cita/(:any)'] = "home/home/cita_medica_elegir/$1";
$route['home/mover_cita/(:num)/(:any)/(:any)'] = "cita/cita/move/$1/$2/$3";
$route['home/agrandar_cita/(:num)/(:any)'] = "cita/cita/resize/$1/$2/";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */