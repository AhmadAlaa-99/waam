<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSlidersTable extends Migration {

	public function up()
	{
		Schema::create('sliders', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title');
            $table->string('img');
			$table->longText('description');
			$table->string('button_title')->nullable();
			$table->string('button_url')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('sliders');
	}
}
