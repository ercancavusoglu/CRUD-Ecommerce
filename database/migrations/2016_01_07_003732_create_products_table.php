<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('products', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name');
$table->string('slug');
$table->text('images');
$table->text('content');
$table->integer('quantity');
$table->float('amount');
$table->integer('stock_id');
$table->integer('category_id');
$table->integer('sort_order');
$table->integer('status');
$table->integer('viewed');
$table->text('meta_title');
$table->text('meta_description');
$table->text('meta_keywords');

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
