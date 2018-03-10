<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{

    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('messages', function (Blueprint $table) {
            $table->foreign('receiver_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('messages', function (Blueprint $table) {
            $table->foreign('sender_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('product_type_id')->references('id')->on('product_types')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('product_user', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('product_id')->references('id')->on('products')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('order_product', function (Blueprint $table) {
            $table->foreign('order_id')->references('id')->on('orders')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('product_id')->references('id')->on('products')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
        Schema::table('message_modifier_product', function (Blueprint $table) {
            $table->foreign('message_modifier_id')->references('id')->on('message_modifiers')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('product_id')->references('id')->on('products')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign('user_id');
        });

        Schema::table('messages', function (Blueprint $table) {
            $table->dropForeign('sender_id');
            $table->dropForeign('receiver_id');
        });

        Schema::table('product', function (Blueprint $table) {
            $table->dropForeign('product_type_id');
        });

        Schema::table('product_user', function (Blueprint $table) {
            $table->dropForeign('user_id');
            $table->dropForeign('product_id');
        });

        Schema::table('order_product', function (Blueprint $table) {
            $table->dropForeign('order_id');
            $table->dropForeign('product_id');
        });

        Schema::table('message_modifier_product', function (Blueprint $table) {
            $table->dropForeign('product_id');
            $table->dropForeign('message_modifier_id');
        });
    }
}