<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('accounts', function (Blueprint $table) {          
            $table->string('id')->unique();
            $table->primary('id');            
            $table->text('password');
               
            $table->timestamp('created_at');   
            $table->timestamp('updated_at');             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('accounts');
    }
}
