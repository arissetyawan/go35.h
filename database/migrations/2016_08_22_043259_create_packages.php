<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackages extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('packages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('code')->unique();
			$table->string('name');
			$table->string('interval_unit', 10);
			$table->integer('interval_value');
			$table->integer('price');
			$table->boolean('enable');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('packages');
	}

}
