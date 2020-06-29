<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsertestTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('usertest', function (Blueprint $table) {
				$table->increments('id');//id int primary key auto_increment
				// $table->timestamps();//created_at & updated_at datetime
				$table->string('name', 50);
				$table->string('email', 150);
				$table->date('birthday');
				$table->string('password', 100);
				$table->string('address', 250);
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('usertest');
	}
}
