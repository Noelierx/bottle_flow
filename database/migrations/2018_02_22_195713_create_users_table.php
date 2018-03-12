<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	public function up()
	{
		Schema::create('users', function(Blueprint $table) {
			$table->increments('id');
			$table->string('pseudo');
			$table->string('email')->unique();
			$table->string('password');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('country');
			$table->boolean('is_admin')->default(false);
			$table->rememberToken();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('users');
	}
}