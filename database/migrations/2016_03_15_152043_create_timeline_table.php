<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimelineTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('timeline', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('sbf_no');
			$table->string('project');
			$table->string('traker');
			$table->string('subject');
			$table->string('author');
			$table->timestamp('start_date');
			$table->timestamp('update_date');
			$table->string('difficulty');
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
		Schema::drop('timeline');
	}

}
