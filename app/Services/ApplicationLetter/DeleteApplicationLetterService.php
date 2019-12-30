<?php

namespace App\Services\ApplicationLetter;

use App\ApplicationLetter;

class DeleteApplicationLetterService
{
    public function handle($data)
    {
        $data = (object) $data;
        $appLetter = ApplicationLetter::find($data->id);
        $appLetter->delete();

        return $appLetter;
    }
}