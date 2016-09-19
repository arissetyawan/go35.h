<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageFeatures extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('package_features', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('package_id');
			$table->integer('hotel_id');
			$table->string('controller', 50);
			$table->string('action', 50);
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
     Schema::drop('package_features');
	}

}
