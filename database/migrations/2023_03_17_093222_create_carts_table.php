<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCartsTable extends Migration
 {

	public function up()
	{
		Schema::create('carts', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->date('date');
			$table->integer('cus_id');
			$table->string('price_total');
			 $table->string('status')->nullable();
              $table->string('note')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('carts');
	}
}
