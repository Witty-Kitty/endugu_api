<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function(Blueprint $table){
            $table->increments('id');
            $table->string('phone_number');
            $table->string('message');
            $table->enum('category', ['mobile_money_transfer_scam', 'promotion_scam', 'other']);
            $table->enum('mobile_network', ['safaricom', 'airtel', 'yu', 'orange']);
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
        Schema::drop('reports');
    }
}
