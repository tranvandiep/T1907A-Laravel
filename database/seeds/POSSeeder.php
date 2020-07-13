<?php

use Illuminate\Database\Seeder;

class POSSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$currentTime = date('Y-m-d H:i:s');

		//Fake khach hang
		// for ($i = 0; $i < 5; $i++) {
		// 	DB::table('customers')->insert([
		// 			'fullname'     => 'TRAN VAN '.$i,
		// 			'email'        => $i.'@gokisoft.com',
		// 			'phone_number' => $i,
		// 			'address'      => 'DC '.$i,
		// 			'birthday'     => '1999-02-02',
		// 			'created_at'   => $currentTime,
		// 			'updated_at'   => $currentTime
		// 		]);
		// }

		//Fake san pham
		for ($i = 0; $i < 3; $i++) {
			$category = \App\Category::create([
					'category_name' => 'Danh Muc '.$i
				]);

			for ($j = 1; $j < 6; $j++) {
				DB::table('products')->insert([
						'title'       => 'San Pham '.$j,
						'price'       => $j*10000,
						'thumbnail'   => 'https://hips.hearstapps.com/vader-prod.s3.amazonaws.com/1587665105-samsung-galaxy-s10e-smartphone-1550695757.jpg',
						'content'     => 'Noi dung '.$j,
						'id_category' => $category->id,
						'created_at'  => $currentTime,
						'updated_at'  => $currentTime
					]);
			}
		}
	}
}
