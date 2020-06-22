<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UrlController extends Controller {
	public function testUrl(Request $request) {
		echo 'Hello > URL';
	}

	public function testUrl2(Request $request, $href_param) {
		echo $href_param;
	}

	public function showInputUser(Request $request) {
		# code...
		return view('input-user');
	}
}
