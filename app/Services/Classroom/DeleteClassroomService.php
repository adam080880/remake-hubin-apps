<?php

namespace App\Services\Classroom;

use App\Classroom;

class DeleteClassroomService
{
    public function handle($data)
    {
        $data = (object) $data;
        $classroom = Classroom::find($data->id);        
        $classroom->delete();

        return $classroom;
    }
}