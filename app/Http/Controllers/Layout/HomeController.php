<?php

namespace App\Http\Controllers\Layout;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller {
	public function showHomePage(Request $request) {
		return view('template.home');
	}

	public function showNews(Request $request) {
		return view('template.news');
	}

	public function showContact(Request $request) {
		return view('template.contact');
	}

	public function showDetail(Request $request, $href_param) {
		return view('template.detail')->with([
				'href_param' => $href_param
			]);
	}
}
