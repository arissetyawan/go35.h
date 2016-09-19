<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelImages extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('hotel_images', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('filename', 100);
			$table->string('filepath', 200);
			$table->string('filesize', 100);
			$table->string('image_type', 50);
			$table->string('content_type', 50);
			$table->integer('width');
			$table->integer('height');
			$table->integer('hotel_id');
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
		Schema::drop('hotel_images');
	}

}
