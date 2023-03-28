<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAboutUsTable extends Migration {

	public function up()
	{
		Schema::create('About_us', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('logo');
            $table->string('image');
			$table->longText('summary')->nullable();
			$table->string('address');
			$table->longText('goals');
			$table->string('vision');
			$table->string('mission');
			$table->string('email');
			$table->string('moobile');
			$table->string('fax');
		});
	}

	public function down()
	{
		Schema::drop('About_us');
	}
}
