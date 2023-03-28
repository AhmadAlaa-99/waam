<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration {

	public function up()
	{
		Schema::create('settings', function(Blueprint $table) {
		$table->id();
			$table->timestamps();
			$table->string('v_price');
			$table->string('tax');
			$table->string('disscounts');
			$table->string('price-recent');
			$table->bigInteger('product_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('settings');
	}
}