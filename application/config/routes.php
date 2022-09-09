<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// ------------------------------------------------------
// -----------------------MAIN---------------------------
// ------------------------------------------------------
$route['main'] = 'main';
$route['getAll'] = 'main/getAll';
$route['getByID'] = 'main/getByID';
$route['getCustom'] = 'main/getCustom';
$route['insert'] = 'main/insert';
$route['updateCustom'] = 'main/updateCustom';
$route['updateID'] = 'main/updateID';
$route['deleteID'] = 'main/deleteID';
// ------------------------------------------------------
// ------------------------------------------------------
// ---------------- CUSTOM ------------------------------
// ------------------------------------------------------
$route['quickLoadPage'] = 'main/quickLoadPage';
// ------------------------------------------------------
// ------------------------------------------------------
// ------------------------------------------------------
$route['privacyPolicy'] = 'main/privacyPolicy';
$route['termsAndConditions'] = 'main/termsAndConditions';
$route[(':any')] = 'main/error';