<?php

namespace App\Services\Student;

use App\Student;

class DeleteStudentService
{
    public function handle($data)
    {
        $data = (object) $data;
        $student = Student::find($data->id);
        $student->delete();
        
        return $student;
    }
}