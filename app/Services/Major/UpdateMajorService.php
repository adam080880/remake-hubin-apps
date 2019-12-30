<?php

namespace App\Services\Major;

use App\Major;

class UpdateMajorService
{
    public function handle($data)
    {
        $data = (object) $data;
        $major = Major::find($data->id);
        $major->major = $data->major;
        $major->save();

        return $major;
    }
}