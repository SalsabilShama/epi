<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTikaExpectedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tika_expecteds', function (Blueprint $table) {
            $table->id();
            $table->integer('upozilla_id');
            $table->integer('union_id');
            $table->integer('ward_id');
            $table->date('date');
            $table->integer('user_id');
            $table->integer('added_by');
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
        Schema::dropIfExists('tika_expecteds');
    }
}
