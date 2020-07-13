<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('order_details', function (Blueprint $table) {
				$table->increments('id');
				$table->unsignedInteger('id_order');
				$table->foreign('id_order')->references('id')->on('orders');
				$table->unsignedInteger('id_product');
				$table->foreign('id_product')->references('id')->on('products');
				$table->integer('num');
				$table->float('total', 8, 2);
				$table->float('price', 8, 2);
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('order_details');
	}
}
