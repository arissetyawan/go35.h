<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotels extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hotels', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('contact_email');
			$table->string('bcc_email');
			$table->string('password', 60);
			$table->string('telephone', 20);
			$table->string('address', 20);
			$table->string('city', 20);
			$table->string('zip_code', 20);
			$table->string('country', 20);
			$table->string('description', 200);
			$table->string('business_type', 100);
			$table->string('website_url', 100);
			$table->string('status', 10);

			$table->integer('package_id');
			$table->integer('currency_id');
			$table->integer('tax');
			$table->string('custom_tax_label', 50);
			$table->string('widget_code', 10);
			$table->string('locale', 4);
			$table->string('google_analytics_account', 20);
			$table->string('google_analytics_domain', 100);
			$table->boolean('display_voucher');
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
		Schema::drop('hotels');
	}

}
