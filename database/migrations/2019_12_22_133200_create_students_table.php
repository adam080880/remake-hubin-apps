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
            $table->bigIncrements('id');
            $table->string('nisn')->unique();
            $table->string('nis')->unique();
            $table->string('name');
            $table->string('telp');
            $table->unsignedBigInteger('classroom_id');
            $table->timestamps();

            $table->unique(['nisn', 'nis']);
            $table->unique(['nisn', 'classroom_id']);

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
