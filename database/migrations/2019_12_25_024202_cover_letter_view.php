<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CoverLetterView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('cover_letters')) {
            Schema::table('cover_letters', function(Blueprint $table) {
                $table->string('number');
                $table->unique(['application_id']);
            });
        }

        DB::statement(
            "CREATE VIEW cover_letter_view AS SELECT cover_letters.id,cover_letters.number,application_letters.number AS application_letter_number,cover_letters.date,cover_letters.from,cover_letters.to,companies.name,companies.address,students.nisn,students.nis,students.name as student_name,cover_letters.verification,students.telp,classrooms.classroom FROM cover_letters,students,companies,classrooms,application_letters WHERE application_letters.nisn=students.nisn AND application_letters.company_id=companies.id AND cover_letters.application_id=application_letters.id AND students.classroom_id=classrooms.id"
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement(
            "DROP VIEW cover_letter_view"
        );
    }
}
