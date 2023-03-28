<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('name');
			$table->string('image');
			$table->string('org_price');
			$table->string('sell_price');
            $table->foreignId('type_id')->constrained('types')->cascadeOnDelete();
			$table->longText('desc');
			$table->string('quantity');
			$table->boolean('status');
		});
	}

	public function down()
	{
		Schema::drop('products');
	}
}
