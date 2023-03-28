<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration {

	public function up()
	{
		Schema::create('customers', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name');
			$table->string('logo');
			$table->string('address');
			$table->string('email');
			$table->string('mobile');
			$table->string('contact_name')->nullable();
			$table->date('reg_date');
			$table->boolean('status');
		});
	}

	public function down()
	{
		Schema::drop('customers');
	}
}