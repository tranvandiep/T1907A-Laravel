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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/calculator', function () {
		return view('calculator');
	});

Route::get('/calculator_2', [
		'as'   => 'calculator_name',
		'uses' => 'CalculatorController@showCalculator'
	]);

Route::post('/calculator_2', [
		'as'   => 'calculator_post_name',
		'uses' => 'CalculatorController@postCalculator'
	]);

Route::get('/student_list', [
		'as'   => 'student_list',
		'uses' => 'StudentController@showAllStudent'
	]);

Route::get('/student/edit', [
		'as'   => 'student_edit',
		'uses' => 'StudentController@editStudent'
	]);

Route::post('/student/delete', [
		'as'   => 'student_delete',
		'uses' => 'StudentController@deleteStudent'
	]);
Route::post('/student/update', [
		'as'   => 'student_update',
		'uses' => 'StudentController@updateStudent'
	]);

Route::get('/test', [
		'as'   => 'test',
		'uses' => 'TestController@showTest'
	]);

Route::get('/ban-hang', [
		'as'   => 'sell',
		'uses' => 'TestController@showSell'
	]);

Route::get('/ban-hang-2', [
		'as'   => 'sell-2',
		'uses' => 'TestController@showSell2'
	]);

Route::get('/ban-hang-3', [
		'as'   => 'sell-3',
		'uses' => 'TestController@showSell2'
	]);