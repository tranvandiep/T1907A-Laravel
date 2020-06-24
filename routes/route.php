<?php

// Routing qua vi du START
Route::group(['prefix' => '/route'], function () {
		Route::get('/helloworld', function () {
				return 'Hello T1907A';
			});

		Route::get('/a/{valueA}/b/{valueB}', function ($valueA, $valueB) {
				//code giai phuong trinh bac 1
				if ($valueA == 0) {
					if ($valueB == 0) {
						return 'PTVSN';
					} else {
						return 'PTVN';
					}
				}
				return 'Nghiem x = '.(-$valueB/$valueA);
			});

		Route::get('/{a}x+{b}', function ($a, $b) {
				//code giai phuong trinh bac 1
				if ($a == 0) {
					if ($b == 0) {
						return 'PTVSN';
					} else {
						return 'PTVN';
					}
				}
				return 'Nghiem x = '.(-$b/$a);
			});

		Route::get('/{a}x+{b}=0', function ($a, $b) {
				//code giai phuong trinh bac 1
				if ($a == 0) {
					if ($b == 0) {
						return 'PTVSN';
					} else {
						return 'PTVN';
					}
				}
				return 'Nghiem x = '.(-$b/$a);
			});

		Route::get('/show-student', 'Route\RouteStudentController@showStudent');
	});
// Routing bai tap route END