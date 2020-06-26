<?php

Route::get('/home', 'Layout\HomeController@showHomePage')->name('home-page');

Route::get('/tin-tuc', 'Layout\HomeController@showNews')->name('news');

Route::get('/lien-he', 'Layout\HomeController@showContact')->name('contact');

Route::get('/{href_param}.html', 'Layout\HomeController@showDetail')->name('post-detail');