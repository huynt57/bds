<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('projects', function(Blueprint $table) {

            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->string('lat')->nullable();
            $table->string('lng')->nullable();
            $table->string('type')->nullable();
            $table->string('zip')->nullable();
            $table->bigInteger('price')->default(0);
            $table->text('desc')->nullable();
            $table->float('size')->nullable();
            $table->text('features')->nullable();
            $table->string('main_images')->nullable();
            $table->integer('status')->nullable();
            $table->string('slug')->nullable();
            $table->string('address')->nullable();
            $table->boolean('is_feature')->default(false);
            $table->string('floor_number')->nullable();
            $table->string('building_number')->nullable();
            $table->string('year_begin')->nullable();
            $table->integer('investor_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
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
        Schema::drop('projects');
    }
}
