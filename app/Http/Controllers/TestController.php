<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller {
	public function showTest(Request $request) {
		return view('test2');
	}

	public function showSell(Request $request) {
		return view('sell');
	}

	public function showSell2(Request $request) {
		# code...
		//test
	}
}
