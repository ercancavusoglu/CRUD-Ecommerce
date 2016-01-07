<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('orders', function(Blueprint $table) {
                $table->increments('id');
                $table->string('invoice_no');
$table->integer('users_id');
$table->float('total');
$table->string('name');
$table->string('email');
$table->string('phone');
$table->string('fax');
$table->string('payment_method');
$table->string('payment_name');
$table->text('payment_address');
$table->string('payment_city');
$table->string('payment_postcode');
$table->string('shipping_name');
$table->text('shipping_address');
$table->string('shipping_city');
$table->string('shipping_postcode');
$table->text('comment');
$table->integer('status');
$table->string('ip');
$table->text('user_agent');
$table->text('accept_language');

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
        Schema::drop('orders');
    }

}
