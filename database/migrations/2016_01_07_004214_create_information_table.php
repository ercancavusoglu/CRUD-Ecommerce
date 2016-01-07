<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('information', function(Blueprint $table) {
                $table->increments('id');
                $table->string('name');
$table->string('slug');
$table->text('content');
$table->integer('tabs_id');
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
        Schema::drop('information');
    }

}
