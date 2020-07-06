<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('author', function (Blueprint $table) {
				$table->string('nickname', 25);
				$table->primary('nickname');
				$table->string('fullname', 50);
				$table->string('email', 150);
				$table->string('address', 250);
				$table->string('phone_number', 15);
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('author');
	}
}
