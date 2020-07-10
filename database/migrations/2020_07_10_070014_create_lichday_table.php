<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLichdayTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('lichday', function (Blueprint $table) {
				$table->increments('id');
				$table->string('class_name', 50);
				$table->string('subject_name', 50);
				$table->string('teacher_name', 50);
				$table->tinyInteger('frametime');
				$table->float('starttime', 8, 2);
				$table->float('endtime', 8, 2);
				$table->date('startdate');
				$table->date('enddate');
				$table->string('note', 50);
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('lichday');
	}
}
