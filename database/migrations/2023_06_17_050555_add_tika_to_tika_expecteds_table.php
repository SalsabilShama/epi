<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTikaToTikaExpectedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tika_expecteds', function (Blueprint $table) {
            $table->integer('tika_id')->nullable();
            $table->integer('dose_number')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tika_expecteds', function (Blueprint $table) {
            //
        });
    }
}
