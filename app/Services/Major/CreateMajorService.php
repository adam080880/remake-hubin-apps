<?php

namespace App\Services\Major;

use App\Major;

class CreateMajorService
{
    public function handle($data)
    {
        $data = (object) $data;
        $major = new Major;
        $major->major = $data->major;
        $major->save();

        return $major;
    }
}