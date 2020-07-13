<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducctsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('products', function (Blueprint $table) {
				$table->increments('id');
				$table->string('title', 250);
				$table->float('price', 8, 2);
				$table->string('thumbnail', 500);
				$table->text('content');
				$table->unsignedInteger('id_category');
				$table->foreign('id_category')->references('id')->on('categories');
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('produccts');
	}
}
