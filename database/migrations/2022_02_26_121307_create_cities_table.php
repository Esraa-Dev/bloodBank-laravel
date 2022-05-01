<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration {

	public function up()
	{
		Schema::create('cities', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('governorates_id')->unsigned();
			$table->timestamps();
			$table->string('name');
		});
	}

	public function down()
	{
		Schema::drop('cities');
	}
}