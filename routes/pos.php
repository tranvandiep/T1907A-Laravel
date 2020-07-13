<?php
Route::group(['prefix' => '/pos'], function () {
		Route::get('/index', 'Pos\PosController@index');

		Route::post('/post-order', 'Pos\PosController@postOrder')->name('post_order');
	});