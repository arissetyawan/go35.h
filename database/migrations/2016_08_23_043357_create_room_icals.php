<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomIcals extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('room_icals', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ical_provider_id');
			$table->integer('hotel_id');
			$table->integer('room_id');
			$table->string('ical_url', 200);
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
    Schema::drop('room_icals');
	}

}
