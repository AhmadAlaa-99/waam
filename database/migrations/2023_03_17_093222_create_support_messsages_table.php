<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSupportMesssagesTable extends Migration {

	public function up()
	{
		Schema::create('support_messsages', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('email');
			$table->string('mobile')->nullable();
			$table->string('subject');
			$table->longText('message');
		});
	}

	public function down()
	{
		Schema::drop('support_messsages');
	}
}