<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationLettersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_letters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('number');
            $table->date('date');
            $table->string('nisn');     
            $table->unsignedBigInteger('company_id');
            $table->enum('status', ['1','2','3']);
            $table->timestamps();  
            
            $table->unique(['nisn', 'company_id']);
            $table->unique(['nisn', 'number']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('application_letters');
    }
}
