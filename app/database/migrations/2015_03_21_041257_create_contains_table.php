<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContainsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contains', function(Blueprint $table){
			$table->increments('id');
			$table->integer('book_id')->unsigned();
			$table->integer('cart_id')->unsigned();
			$table->integer('quantity');
			$table->foreign('book_id')->references('id')->on('books');
			$table->foreign('cart_id')->references('id')->on('shopping_cart');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('contains');
	}

}
