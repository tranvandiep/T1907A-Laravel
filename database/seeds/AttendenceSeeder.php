<?php

use Illuminate\Database\Seeder;

class AttendenceSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		for ($i = 0; $i < 10; $i++) {
			DB::table('sinhvien')->insert([
					'rollno'     => 'R00'.$i,
					'fullname'   => 'SV 0'.$i,
					'address'    => 'DC '.$i,
					'email'      => $i.'@gmail.com',
					'birthday'   => '1999-01-02',
					'class_name' => 'T1907A',
					'created_at' => date('Y-m-d H:i:s'),
					'updated_at' => date('Y-m-d H:i:s')
				]);
		}

		DB::table('lichday')->insert([
				'subject_name' => 'Lap trinh Laravel',
				'teacher_name' => 'Tran Van Diep',
				'frametime'    => 0,
				'starttime'    => 13.5,
				'endtime'      => 17.5,
				'startdate'    => '2020-06-01',
				'enddate'      => '2020-07-06',
				'class_name'   => 'T1907A',
				'note'         => 'Học chiểu 2, 4, 6',
				'created_at'   => date('Y-m-d H:i:s'),
				'updated_at'   => date('Y-m-d H:i:s')
			]);

		DB::table('lichday')->insert([
				'subject_name' => 'SQL Server',
				'teacher_name' => 'Tran Van Diep',
				'frametime'    => 0,
				'starttime'    => 8,
				'endtime'      => 12,
				'startdate'    => '2020-06-01',
				'enddate'      => '2020-07-06',
				'class_name'   => 'T1907A',
				'note'         => 'Học chiểu 2, 4, 6',
				'created_at'   => date('Y-m-d H:i:s'),
				'updated_at'   => date('Y-m-d H:i:s')
			]);
	}
}
