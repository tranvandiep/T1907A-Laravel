<?php
Route::group(['prefix' => '/attendence'], function () {
		Route::get('/index', 'Attendence\AttendenceController@index')->name('attendence_index');

		Route::get('/view', 'Attendence\AttendenceController@view')->name('attendence_view');

		Route::post('/post', 'Attendence\AttendenceController@post')->name('attendence_post');
	});