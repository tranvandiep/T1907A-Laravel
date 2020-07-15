<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller {
	public function index(Request $request) {
		// var_dump(Auth::user());
		return 'Category List >> welcome >> '.Auth::user()->name.' - '.Auth::user()->id;
	}

	public function view(Request $request) {
		return 'Category View >> id >> '.Auth::id();
	}
}
