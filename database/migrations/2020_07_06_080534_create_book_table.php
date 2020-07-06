<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('book', function (Blueprint $table) {
				$table->increments('id');
				$table->string('title', 250);
				$table->text('content');
				$table->float('price');
				$table->string('nxb', 50);
				$table->string('nickname', 25);
				$table->foreign('nickname')->references('nickname')->on('author');
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('book');
	}
}
