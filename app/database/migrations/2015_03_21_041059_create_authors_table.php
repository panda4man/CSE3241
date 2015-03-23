<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('authors', function (Blueprint $table){
			$table->increments('id');
			$table->string('published_name')->unique();
			$table->integer('publisher_id')->unsigned();
			$table->string('first_name', 16);
			$table->string('middle_name', 16);
			$table->string('last_name', 16);
			$table->string('genre');
			$table->timestamps();
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
		Schema::drop('authors');
	}

}
