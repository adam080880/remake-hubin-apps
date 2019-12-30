<?php

namespace App\Services\Student;

use App\Student;

class CreateStudentService 
{
    public function handle($data)
    {        
        $data = (object) $data;
        $student = new Student;
        $student->nisn = $data->nisn;
        $student->nis = $data->nis;
        $student->name = $data->name;
        $student->telp = $data->telp;
        $student->classroom_id = $data->classroom_id;
        $student->save();

        return $student;
    }
}