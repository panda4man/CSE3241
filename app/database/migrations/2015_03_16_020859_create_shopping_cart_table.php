<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingCartTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shopping_cart', function(Blueprint $table){
			$table->integer('cart_id')->primary();
			$table->string('user', 32);
			$table->string('purchase_status');
			$table->date('purchase_date');
			$table->foreign('user')->references('user')->on('customers');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('shopping_cart');
	}

}
