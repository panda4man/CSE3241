<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('book_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->timestamp('utc_time');
			$table->string('title');
			$table->integer('rating')->default(0);
			$table->string('text');
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('book_id')->references('id')->on('books');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('comments');
	}

}
