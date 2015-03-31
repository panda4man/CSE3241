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
		Schema::create('shopping_cart', function (Blueprint $table){
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('purchase_status', 32);
			$table->date('purchase_date');
			$table->timestamps();
			$table->foreign('user_id')->references('id')->on('users');
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
