<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cars', function($table)
		{
			$table->increments('id');
			$table->integer('id_marca')->unsigned();	
			$table->string('modelo');
			$table->integer('year');	
			
			$table->foreign('id_marca')->references('id')->on('marcas');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cars');
	}

}
