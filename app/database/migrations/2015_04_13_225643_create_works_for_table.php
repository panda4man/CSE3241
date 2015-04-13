<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksForTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('works_for', function(Blueprint $table){
			$table->increments('id');
			$table->integer('author_id')->unsigned();
			$table->integer('publisher_id')->unsigned();
			$table->foreign('author_id')->references('id')->on('authors');
			$table->foreign('publisher_id')->references('id')->on('publishers');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('works_for');
	}

}
