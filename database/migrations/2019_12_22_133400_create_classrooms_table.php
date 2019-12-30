<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('classroom');
            $table->string('homeroom_teacher');
            $table->unsignedBigInteger('major_id');
            $table->unsignedBigInteger('generation_id');
            $table->unsignedBigInteger('periode_id');
            $table->timestamps();

            $table->unique(['generation_id', 'classroom']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classrooms');
    }
}
