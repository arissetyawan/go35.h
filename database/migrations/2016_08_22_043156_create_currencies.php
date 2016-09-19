<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrencies extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
  	Schema::create('currencies', function(Blueprint $table)
		{
      $table->integer('id', true, false)->length(10);
			$table->string('name', 20);
			$table->string('symbol', 15);
			$table->string('logo', 200);
			$table->integer('conversion_ratio');
			$table->boolean('enable');
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
		Schema::drop('currencies');
	}

}
