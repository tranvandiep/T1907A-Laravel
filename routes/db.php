<?php
Route::group(['prefix' => '/db'], function () {
		Route::get('input', 'DB\UserController@showInput')->name('db_input');

		Route::post('post', 'DB\UserController@doPostUser')->name('doPostUser');

		Route::get('index', 'DB\UserController@showIndex')->name('db_index');
	});