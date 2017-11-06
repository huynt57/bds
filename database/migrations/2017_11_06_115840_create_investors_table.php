<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('investors', function(Blueprint $table) {

            $table->increments('id');
            $table->text('desc')->nullable();
            $table->string('year_begin')->nullable();
            $table->string('member_from')->nullable();
            $table->string('member_to')->nullable();
            $table->string('address')->nullable();
            $table->string('email')->nullable();
            $table->string('website')->nullable();
            $table->string('phone')->nullable();
            $table->text('sector')->nullable();
            $table->integer('agent_id')->nullable();
            $table->string('title')->nullable();
            $table->string('image')->nullable();
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
        //
        Schema::drop('investors');
    }
}
