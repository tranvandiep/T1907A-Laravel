<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataController extends Controller {
	public function showHelloWorld(Request $request) {
		$message     = 'TRAN VAN DIEP';
		$messageHTML = '<font color=RED>TRAN VAN DIEP</font>';

		return view('data.helloworld')->with([
				'msg'     => $message,
				'msgHTML' => $messageHTML
			]);
	}

	public function tinhGiaiThua(Request $request, $n) {
		$result = 1;
		for ($i = 1; $i <= $n; $i++) {
			$result *= $i;
		}

		return view('data.ketquagiaithua')->with([
				'result' => $result,
				'n'      => $n
			]);
	}

	public function showStudent(Request $request) {
		$studentList = [];
		for ($i = 0; $i < 10; $i++) {
			$studentList[] = [
				'fullname' => 'Ten '.$i,
				'age'      => $i,
				'address'  => 'Dia Chi '.$i
			];
		}
		return view('data.student-list')->with([
				'studentList' => $studentList
			]);
	}

	public function viewInputUser(Request $request) {
		return view('data.input-user');
	}

	public function doGetUser(Request $request) {
		// var_dump($request->all());
		$name       = $request->name;
		$email      = $request->email;
		$birthday   = $request->birthday;
		$password   = $request->password;
		$confirmPwd = $request->confirmation_pwd;
		$address    = $request->address;

		// echo $name;
		// return view('data.welcome')->with([
		// 		'name' => $name
		// 	]);
		return redirect()->route('viewInputUser');
	}

	public function doPostUser(Request $request) {
		// var_dump($request->all());
		$name       = $request->name;
		$email      = $request->email;
		$birthday   = $request->birthday;
		$password   = $request->password;
		$confirmPwd = $request->confirmation_pwd;
		$address    = $request->address;

		// echo $name;
		// return view('data.welcome')->with([
		// 		'name' => $name
		// 	]);
		return redirect()->route('viewInputUser');
	}
}
