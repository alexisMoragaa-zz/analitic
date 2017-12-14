<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productos', function(Blueprint $table)
		{

			$table->increments('id');
			$table->string('name');
			$table->integer('price');
			$table->integer('stock');
			$table->string('description');

			$table->integer('user_id')->unsigned();
			$table->integer('category_id')->unsigned();

			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('category_id')->references('id')->on('categorias');
			$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('productos');
	}

}
