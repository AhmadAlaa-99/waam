<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMaitenanseRequestTable extends Migration {

	public function up()
	{
		Schema::create('maitenanse_request', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->bigInteger('prod_id')->unsigned();
			$table->bigInteger('customer_id')->unsigned();
			$table->longText('message');
			$table->date('date_purchase');
			   $table->string('name_customer')->nullable();
              $table->string('email_customer')->nullable();
			$table->boolean('status');
		});
	}

	public function down()
	{
		Schema::drop('maitenanse_request');
	}
}