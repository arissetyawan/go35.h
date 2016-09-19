<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIcalProviders extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
  	Schema::create('ical_providers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('symbol');
			$table->string('logo');
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
		//
	}

}
