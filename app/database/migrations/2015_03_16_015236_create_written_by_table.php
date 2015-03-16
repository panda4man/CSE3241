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
			$table->string('isbn');
			$table->string('published_name');
			$table->foreign('isbn')->references('isbn')->on('books');
			$table->foreign('published_name')->references('published_name')->on('authors');
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
