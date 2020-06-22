<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller {
	public function showCalculator(Request $request) {
		return view('calculator_2')->with([
				'result' => '',
				'a'      => '',
				'b'      => ''
			]);
	}

	public function postCalculator(Request $request) {
		// var_dump($request->all());
		$a = $request->a;
		$b = $request->b;

		$cal = $request->cal;

		$result = '';
		switch ($cal) {
			case '+':
				$result = $a+$b;
				break;
			case '-':
				$result = $a-$b;
				break;
			case '*':
				$result = $a*$b;
				break;
			case '/':
				$result = $a/$b;
				break;
		}

		return view('calculator_2')->with([
				'result' => $result,
				'a'      => $a,
				'b'      => $b
			]);
	}
}
