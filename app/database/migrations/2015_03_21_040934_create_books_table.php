<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('isbn')->unique();
			$table->string('name');
			$table->string('category', 15);
			$table->date('year');
			$table->decimal('price', 5, 2);
			$table->string('title');
			$table->string('format', 32);
			$table->string('language', 32);
			$table->string('edition', 10);
			$table->integer('stock');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('books');
	}

}
