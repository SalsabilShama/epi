<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpozillaStockModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upozilla_stock_models', function (Blueprint $table) {
            $table->id();
            $table->integer('upozilla_id');
            $table->date('date');
            $table->integer('opening_balance');
            $table->integer('current_balance');
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
        Schema::dropIfExists('upozilla_stock_models');
    }
}
