<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVouchers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('vouchers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('code', 10);
			$table->string('name', 20);
			$table->string('description', 20);
			$table->string('scope', 20); // room hotel or global app
			$table->integer('hotel_id');
			$table->integer('room_id');
			$table->datetime('expired_at');

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
      Schema::drop('vouchers');
	}
}
