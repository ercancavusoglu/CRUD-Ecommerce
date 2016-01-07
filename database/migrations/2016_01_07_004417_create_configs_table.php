<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('configs', function(Blueprint $table) {
                $table->increments('id');
                $table->text('meta_title');
$table->text('meta_description');
$table->text('meta_keywords');
$table->text('logo');
$table->text('facebook');
$table->text('instagram');
$table->string('mail_smtp');
$table->string('mail_mail');
$table->string('mail_pass');

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
        Schema::drop('configs');
    }

}
