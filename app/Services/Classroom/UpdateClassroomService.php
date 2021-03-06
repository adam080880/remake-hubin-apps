<?php

namespace App\Services\Classroom;

use App\Classroom;

class UpdateClassroomService
{
    public function handle($data)
    {
        $data = (object) $data;
        $classroom = Classroom::find($data->id);
        $classroom->classroom = $data->classroom;
        $classroom->homeroom_teacher = $data->homeroom_teacher;
        $classroom->major_id = $data->major_id;
        $classroom->generation_id = $data->generation_id;
        $classroom->periode_id = $data->periode_id;
        $classroom->save();

        return $classroom;
    }
}