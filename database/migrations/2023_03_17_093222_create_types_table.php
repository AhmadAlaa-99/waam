<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTypesTable extends Migration {

	public function up()
	{
		Schema::create('types', function(Blueprint $table) {
			$table->id();
			$table->timestamps();
			$table->string('name');
             $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
		});
	}

	public function down()
	{
		Schema::drop('types');
	}
}
