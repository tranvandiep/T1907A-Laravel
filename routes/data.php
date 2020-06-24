<?php
Route::group(['prefix' => '/data'], function () {
		Route::get('/helloworld', 'Data\DataController@showHelloWorld');

		Route::get('/{n}!', 'Data\DataController@tinhGiaiThua');

		Route::get('/show-student', 'Data\DataController@showStudent');

		Route::get('/input-user', 'Data\DataController@viewInputUser')->name('viewInputUser');

		Route::get('/do-get-user', 'Data\DataController@doGetUser')->name('doGetUser');

		Route::post('/do-post-user', 'Data\DataController@doPostUser')->name('doPostUser');
	});