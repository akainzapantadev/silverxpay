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
// blogs
$route['blogs'] = 'blogs/blogs';
$route['admin-blogs'] = 'blogs/adminBlogs';
$route['addBlog'] = 'blogs/addBlog';
$route['updateBlog'] = 'blogs/updateBlog';
$route['deleteBlog'] = 'blogs/deleteBlog';
$route['countBlogs'] = 'blogs/countBlogs';
$route['getUrls'] = 'blogs/getUrls';
$route['getBlog'] = 'blogs/getBlog';
$route['checkIfBlogExist'] = 'blogs/checkIfBlogExist';
$route['admin/loadFaq'] = 'admin/loadFaq';
$route['uploadBlogImage'] = 'main/uploadBlogImage';
$route['deleteBlogImageBeforeUpdatingBlogDetails'] = 'blogs/deleteBlogImageBeforeUpdatingBlogDetails';

// library
$route['upload_view'] = 'library/upload';
$route['upload_file'] = 'library/upload/do_upload';

$route['blogs/(:any)'] = 'blogs/blogLoad/$1';
// ------------------------------------------------------
// ------------------------------------------------------
// ------------------------------------------------------
$route['privacyPolicy'] = 'main/privacyPolicy';
$route['termsAndConditions'] = 'main/termsAndConditions';
$route[(':any')] = 'main/error';