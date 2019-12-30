<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClassroomField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('classrooms', function(Blueprint $table) {
            $table->foreign('major_id')->references('id')->on('majors')->onDelete('cascade')->onUpdate('cascade');            
            $table->foreign('generation_id')->references('id')->on('generations')->onDelete('cascade')->onUpdate('cascade');            
            $table->foreign('periode_id')->references('id')->on('periodes')->onDelete('cascade')->onUpdate('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('classrooms', function(Blueprint $table) {
            $table->dropForeign(['major_id']);
            $table->dropForeign(['generation_id']);
            $table->dropForeign(['periode_id']);
        });
    }
}
