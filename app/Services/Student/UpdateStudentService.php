<?php

namespace App\Services\Student;

use App\Student;

class UpdateStudentService 
{
    public function handle($data)
    {        
        $data = (object) $data;
        $student = Student::find($data->id);
        $student->nisn = $data->nisn;
        $student->nis = $data->nis;
        $student->name = $data->name;
        $student->telp = $data->telp;
        $student->classroom_id = $data->classroom_id;
        $student->save();

        return $student;        
    }
}