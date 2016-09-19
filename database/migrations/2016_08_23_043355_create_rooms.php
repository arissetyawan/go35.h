<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRooms extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('rooms', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 100);
			$table->string('listing_type', 100);
			$table->string('description', 200);
			$table->integer('capacity');
			$table->integer('min_stay_days');
			$table->integer('max_adults');
			$table->integer('max_children');
			$table->integer('hotel_id');
			$table->integer('base_price');
			$table->integer('cleaning_fee');
			$table->integer('sorting_order');
			$table->string('ical_token');
			$table->string('address');
			$table->string('city');

			$table->boolean('configurable');
			$table->boolean('maintenance');
			$table->boolean('is_booked');
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
      Schema::drop('rooms');
	}

}
