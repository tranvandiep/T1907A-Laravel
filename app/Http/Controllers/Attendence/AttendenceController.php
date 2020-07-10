<?php

namespace App\Http\Controllers\Attendence;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class AttendenceController extends Controller {
	public function index(Request $index) {
		//Lọc ra những lớp học đang available trong khung giờ hiện tại
		$mydate = new \DateTime();
		$mydate->modify('+7 hours');

		$currentDate = $mydate->format('Y-m-d');

		$frameTime = 0;//0 -> 2,4,6 | 1 => 3, 5, 7
		$day       = $mydate->format('N');//1 => Thu 2, 2 => Thu 3, ..., 7 => Chu nhat
		//1, 3, 5 => thu 2, 4, 6 => frametime = 0
		//2, 4, 6 => thu 3, 5, 7 => frametime = 1
		if ($day == 1 || $day == 3 || $day == 5) {
			$frametime = 0;
		} else if ($day != 7) {
			$frametime = 1;
		} else {
			$frametime = -1;
		}
		$hour        = $mydate->format('H');
		$minute      = $mydate->format('i');
		$currentTime = $hour+$minute/60;
		// echo $currentTime;
		// die();
		// echo $currentDate.' * '.$frametime.' * '.$currentTime;

		$lichdayToday = DB::table('lichday')
			->where('startdate', '<=', $currentDate)
			->where('enddate', '>=', $currentDate)
			->where('frametime', $frametime)
			->where('starttime', '<=', $currentTime)
			->where('endtime', '>=', $currentTime)
			->get();
		// var_dump($lichdayToday);

		return view('attendence.index')->with([
				'index'        => 1,
				'lichdayToday' => $lichdayToday
			]);
	}

	public function view(Request $request) {
		//check du lieu xem co dung ko.
		$lichday = DB::table('lichday')
			->where('id', $request->id)
			->get();
		if ($lichday != null && count($lichday) > 0) {
			$lichday = $lichday[0];
		} else {
			return redirect()->route('attendence_index');
		}

		//danh sach sinh vien;
		$mydate = new \DateTime();
		$mydate->modify('+7 hours');

		$currentDate = $mydate->format('Y-m-d');

		//1 ngay => hoc 1 buoi => 1 lan diem danh.
		$edit = DB::table('diemdanh')
			->leftJoin('sinhvien', 'sinhvien.rollno', '=', 'diemdanh.rollno')
			->where('diemdanh.id_lichday', $request->id)
			->where('diemdanh.created_at', '>=', $currentDate)
			->select('diemdanh.*', 'sinhvien.fullname')
			->get();
		//$edit > 0 => diem danh => sua lai phan diem danh

		$studentList = null;
		if ($edit == null || count($edit) == 0) {
			$studentList = DB::table('sinhvien')
				->where('class_name', $lichday->class_name)
				->get();
		}

		return view('attendence.view')->with([
				'index'       => 1,
				'lichday'     => $lichday,
				'studentList' => $studentList,
				'edit'        => $edit
			]);
	}

	public function post(Request $request) {
		$mydate = new \DateTime();
		$mydate->modify('+7 hours');

		$id_lichday  = $request->id_lichday;
		$data        = json_decode($request->data, true);
		$currentTime = $mydate->format('Y-m-d H:i:s');
		$currentDate = $mydate->format('Y-m-d');

		//check du lieu da ton tai chua
		$edit = DB::table('diemdanh')
			->leftJoin('sinhvien', 'sinhvien.rollno', '=', 'diemdanh.rollno')
			->where('diemdanh.id_lichday', $request->id_lichday)
			->where('diemdanh.created_at', '>=', $currentDate)
			->select('diemdanh.*', 'sinhvien.fullname')
			->get();
		if ($edit != null && count($edit) > 0) {
			//update
			foreach ($data as $item) {
				DB::table('diemdanh')
					->where('id_lichday', $request->id_lichday)
					->where('created_at', '>=', $currentDate)
					->where('rollno', $item['rollno'])
					->update([
						'status'     => $item['status'],
						'note'       => $item['note'],
						'updated_at' => $currentTime
					]);
			}
			return redirect()->route('attendence_index');
		}

		//Them moi.
		foreach ($data as $item) {
			DB::table('diemdanh')->insert([
					'id_lichday' => $id_lichday,
					'rollno'     => $item['rollno'],
					'status'     => $item['status'],
					'note'       => $item['note'],
					'created_at' => $currentTime,
					'updated_at' => $currentTime
				]);
		}
		return redirect()->route('attendence_index');
	}
}
