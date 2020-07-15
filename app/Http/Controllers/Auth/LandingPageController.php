<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingPageController extends Controller {
	public function index(Request $request) {
		return 'Home Page';
	}
}
