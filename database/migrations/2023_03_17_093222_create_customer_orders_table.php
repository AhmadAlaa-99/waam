<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerOrdersTable extends Migration {

	public function up()
	{
		Schema::create('customer_orders', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->bigInteger('cart_id')->unsigned();
			$table->boolean('delivery_status');
		});
	}

	public function down()
	{
		Schema::drop('customer_orders');
	}
}