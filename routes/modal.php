<?php
Route::group(['prefix' => '/modal/author'], function () {
		Route::get('/index', 'Modal\AuthorController@index')->name('view_author_list');

		Route::get('/view_add', 'Modal\AuthorController@viewAdd')->name('view_add');

		Route::post('/post_add_author', 'Modal\AuthorController@postAddAuthor')->name('post_add_author');
	});

Route::group(['prefix' => '/modal/book'], function () {
		Route::get('/index', 'Modal\BookController@index')->name('view_book_list');

		Route::get('/view_add', 'Modal\BookController@viewAdd')->name('view_add_book');

		Route::post('/post_add_book', 'Modal\BookController@postAddBook')->name('post_add_book');
	});