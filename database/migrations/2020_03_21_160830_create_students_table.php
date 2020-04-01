<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('MatricNo')->unique();
            $table->string('password');
            $table->string('Name');
            $table->string('IC_passport');
            $table->string('Kuliyyah');
            $table->string('Level');
            $table->string('Address');
            $table->string('Postcode');
            $table->string('City');
            $table->string('State');
            $table->string('PhoneNo');
            $table->string('Email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
