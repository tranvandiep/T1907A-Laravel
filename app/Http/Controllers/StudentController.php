<?php

namespace App\Http\Controllers;

use App\Student;
use DB;
use Illuminate\Http\Request;

class StudentController extends Controller {
	public function showAllStudent(Request $request) {
		// $students = [];
		// for ($i = 0; $i < 10; $i++) {
		// 	$students[] = [
		// 		'fullname' => 'Ten '.$i,
		// 		'age'      => $i,
		// 		'address'  => 'dia chi '.$i
		// 	];
		// }

		// $students = DB::table('students')->get();
		// $students = DB::table('students')->paginate(10);
		$students = Student::paginate(10);

		$page = 1;
		if (isset($request->page)) {
			$page = $request->page;
		}
		$index = ($page-1)*10+1;

		return view('student_list')->with([
				'index'    => $index,
				'students' => $students
			]);
	}

	public function deleteStudent(Request $request) {
		DB::table('students')
			->where('id', $request->id)
			->delete();
	}

	public function editStudent(Request $request) {
		// $student = DB::table('students')
		// 	->where('id', $request->id)
		// 	->get();
		$student = Student::find($request->id);
		$id      = $request->id;
		// if ($student != null && count($student) > 0) {
		// 	$student = $student[0];
		// } else {
		// 	$student = null;
		// 	$id      = 0;
		// }

		return view('edit_student')->with([
				'student' => $student,
				'id'      => $id
			]);
	}

	public function updateStudent(Request $request) {
		$fullname = $request->fullname;
		$age      = $request->age;
		$address  = $request->address;
		$id       = $request->id;

		if ($id > 0) {
			DB::table('students')
				->where('id', $id)
				->update([
					'fullname' => $fullname,
					'age'      => $age,
					'address'  => $address
				]);
		} else {
			DB::table('students')
				->insert([
					'fullname' => $fullname,
					'age'      => $age,
					'address'  => $address
				]);
		}

		return redirect()->route('student_list');
	}
}
