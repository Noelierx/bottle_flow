<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	public function up()
	{
		Schema::create('products', function(Blueprint $table) {
			$table->increments('id');
			$table->string('reference');
			$table->string('title');
			$table->longText('description');
			$table->string('picture')->nullable();
			$table->float('price');
			$table->float('tax_rate')->default(20);
			$table->integer('product_type_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('products');
	}
}