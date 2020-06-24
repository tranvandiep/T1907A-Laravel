<?php

namespace App\Http\Controllers\Route;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RouteStudentController extends Controller {
	public function showStudent(Request $request) {
		return view('route.student-list');
	}
}
