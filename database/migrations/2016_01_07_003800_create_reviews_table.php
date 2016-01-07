<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('reviews', function(Blueprint $table) {
                $table->increments('id');
                $table->integer('products_id');
$table->integer('users_id');
$table->string('author');
$table->text('content');
$table->integer('rating');
$table->integer('status');

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
        Schema::drop('reviews');
    }

}
