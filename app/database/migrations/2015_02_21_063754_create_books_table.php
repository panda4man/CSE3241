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
			$table->string('isbn')->primary();
			$table->string('category');
			$table->date('year');
			$table->decimal('price', 5, 2);
			$table->string('title');
			$table->string('format');
			$table->string('language');
			$table->string('edition');
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
