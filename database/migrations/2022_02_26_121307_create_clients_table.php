<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration {

	public function up()
	{
		Schema::create('clients', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->string('email');
			$table->string('phone');
			$table->string('password');
			$table->date('date_of_birth');
			$table->date('last_donation_date');
			$table->integer('pin_code')->default('1234');;
			$table->integer('blood_type_id')->unsigned()->nullable();;
			$table->integer('city_id')->unsigned();
			$table->string('api_token', 60)->unique()->nullable();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('clients');
	}
}