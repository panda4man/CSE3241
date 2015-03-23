<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWrittenByTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('written_by', function(Blueprint $table){
			$table->increments('id');
			$table->integer('book_id')->unsigned();
			$table->integer('author_id')->unsigned();
		});

		Schema::table('written_by', function ($table){
			$table->foreign('book_id')->references('id')->on('books');
		});

		Schema::table('written_by', function ($table){
			$table->foreign('author_id')->references('id')->on('authors');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('written_by');
	}

}
