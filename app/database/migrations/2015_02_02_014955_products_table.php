<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->string('brand', 255);
			$table->string('model', 255);
			$table->string('description', 255);
			$table->string('supplier', 255);
			$table->string('category', 255);
			$table->string('sub_category', 255);
			$table->string('image_1', 255);
			$table->string('image_2', 255);
			$table->string('stocks', 10);
			$table->string('hits', 10);
			
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
		Schema::drop('products');
	}

}
