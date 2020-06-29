<?php

namespace App\Http\Controllers\DB;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class UserController extends Controller {
	public function showIndex(Request $request) {
		// $userList = DB::table('usertest')->get();
		$userList = DB::table('usertest')->paginate(6);

		return view('db.index')->with([
				'userList' => $userList
			]);
	}

	public function doPostUser(Request $request) {
		// var_dump($request->all());
		//Luu thong tin tai khoang user vào database
		$name      = $request->name;
		$email     = $request->email;
		$birthday  = $request->birthday;
		$password  = $request->password;
		$confirmwd = $request->confirmation_pwd;
		$address   = $request->address;

		DB::table('usertest')->insert([
				'name'     => $name,
				'email'    => $email,
				'birthday' => $birthday,
				'password' => $password,
				'address'  => $address
			]);

		return redirect()->route('db_index');
	}

	public function showInput(Request $request) {
		return view('db.input');
	}
}
