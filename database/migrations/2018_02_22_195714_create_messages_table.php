<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesTable extends Migration {

	public function up()
	{
		Schema::create('messages', function(Blueprint $table) {
			$table->increments('id');
			$table->longText('content');
			$table->boolean('read')->default(false);
			$table->integer('receiver_id')->unsigned();
			$table->integer('sender_id')->unsigned();
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('messages');
	}
}