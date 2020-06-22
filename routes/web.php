<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
		return view('welcome');
	});

Auth::routes();

Route::get('/helloworld', function () {
		return '<h1>Hello World</h1>';
	});

Route::get('/url', 'UrlController@testUrl');

Route::get('/input-user', 'UrlController@showInputUser');

Route::get('/url/{href_param}', 'UrlController@testUrl2');

Route::get('/{href_param}.html', function ($href_param) {
		return $href_param;
	});

Route::get('/{param}/{href_param}.html', function ($param, $href_param) {
		return $param.' >> '.$href_param;
	});

Route::get('/{param0}/{param1}/{href_param}.html', function ($param0, $param1, $href_param) {
		return $param0.' >> '.$param1.' >> '.$href_param;
	});

Route::get('/{param0}/{param1}/{href_param}.{ext}', function ($param0, $param1, $href_param, $ext) {
		return $param0.' >> '.$param1.' >> '.$href_param.' >> '.$ext;
	});