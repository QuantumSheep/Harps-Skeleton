<?php
use Harps\Core\Route;
use Harps\Controllers\View;
/**
 *
 * ROUTING
 *
 */

Route::get('/', "Default@index");

Route::get('/admin', "Admin@index");
Route::get('/admin/pages', "Admin@index");
Route::get('/admin/pages/{type}', "Admin@index");
Route::post('/admin/addtype', "Admin@addtype");

Route::match(['get', 'post'], '/admin/edit/{type}/{page}', "Admin@editor");
Route::match(['get', 'post'], '/admin/new', "Admin@editor");

Route::get('/documentation', "Default@documentation");
Route::get('/documentation/{doc}', "Default@documentation");