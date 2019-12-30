<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CoverLetterField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cover_letters', function(Blueprint $table) {
            $table->foreign('application_id')->references('id')->on('application_letters')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cover_letters', function(Blueprint $table) {
            $table->dropForeign(['application_id']);
        });
    }
}
