<?php

namespace App\Services\Major;

use App\Major;

class DeleteMajorService
{
    public function handle($data)
    {
        $data = (object) $data;
        $major = Major::find($data->id);
        $major->delete();

        return $major;
    }
}