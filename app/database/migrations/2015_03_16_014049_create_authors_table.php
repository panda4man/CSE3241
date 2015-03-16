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
			$table->string('published_name')->primary();
			$table->string('p_name');
			$table->string('first_name');
			$table->string('middle_name');
			$table->string('last_name');
			$table->string('genre');
			$table->foreign('p_name')->references('name')->on('publishers');
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
