<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->date('dob')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->string('birth_certificate_no')->nullable();
            $table->string('father_nid')->nullable();
            $table->string('mother_nid')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('passport_no')->nullable();
            $table->string('gender')->nullable();
            $table->text('address')->nullable();
            $table->string('registration_date')->nullable();
            $table->integer('registration_number')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
