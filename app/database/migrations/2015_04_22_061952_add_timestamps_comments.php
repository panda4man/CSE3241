<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTimestampsComments extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comments', function($table) {
			$table->timestamps();
		});
		Schema::table('comments', function($table) {
			$table->dropColumn('utc_time');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comments', function($table) {
			$table->timestamp('utc_time');
		});
		Schema::table('comments', function($table) {
			$table->dropColumn('created_at');
			$table->dropColumn('updated_at');
		});
	}

}
