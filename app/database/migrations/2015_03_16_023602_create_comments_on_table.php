<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsOnTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments_on', function (Blueprint $table) {
			$table->string('isbn');
			$table->string('user', 32);
			$table->timestamp('utc_time');
			$table->integer('rating');
			$table->string('text');
			$table->foreign('user')->references('user')->on('customers');
			$table->foreign('isbn')->references('isbn')->on('books');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comments_on');
	}

}
