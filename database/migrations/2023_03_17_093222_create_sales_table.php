<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSalesTable extends Migration {

	public function up()
	{
		Schema::create('sales', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('prod_id')->unsigned();
			$table->integer('customer_id')->unsigned();
			$table->bigInteger('quantity');
			$table->string('price_total');
			$table->boolean('status');
			$table->bigInteger('cart_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('sales');
	}
}