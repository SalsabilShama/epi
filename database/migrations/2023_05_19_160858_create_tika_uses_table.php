<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTikaUsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tika_uses', function (Blueprint $table) {
            $table->id();
            $table->integer('upozilla_id');
            $table->integer('union_id');
            $table->integer('ward_id');
            $table->date('date');
            $table->integer('tika_used');
            $table->integer('tika_damage');
            $table->integer('tika_expired');
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
        Schema::dropIfExists('tika_uses');
    }
}
