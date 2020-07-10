<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSinhvienTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('sinhvien', function (Blueprint $table) {
				$table->string('rollno', 16);
				$table->primary('rollno');
				$table->string('fullname', 50);
				$table->string('email', 150);
				$table->string('address', 250);
				$table->date('birthday');
				$table->string('class_name', 50);
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('sinhvien');
	}
}
