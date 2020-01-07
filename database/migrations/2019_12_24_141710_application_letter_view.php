<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ApplicationLetterView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE VIEW application_letter_view AS 
        SELECT application_letters.id,application_letters.number,application_letters.date
        ,companies.name,companies.address,companies.location,companies.receiver,companies.phone,students.nisn,students.nis,students.name as student_name,
        application_letters.status,students.telp,classrooms.classroom,classrooms.periode_id
        FROM application_letters,students,companies,classrooms 
        WHERE application_letters.nisn=students.nisn 
        AND application_letters.company_id=companies.id AND students.classroom_id=classrooms.id");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW application_letter_view');
    }
}
