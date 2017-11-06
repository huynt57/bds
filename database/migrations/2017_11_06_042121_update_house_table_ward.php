<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateHouseTableWard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('houses', function (Blueprint $table) {
            $table->integer('ward_id')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('meta_desc')->nullable();
            $table->integer('beds')->default(0);
            $table->integer('bath')->default(0);

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
        Schema::table('houses', function (Blueprint $table) {
            $table->dropColumn('ward_id');
            $table->dropColumn('meta_keywords');
            $table->dropColumn('meta_desc');
            $table->dropColumn('beds');
            $table->dropColumn('bath');

        });
    }
}
