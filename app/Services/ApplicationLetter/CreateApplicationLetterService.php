<?php

namespace App\Services\ApplicationLetter;

use App\ApplicationLetter;

class CreateApplicationLetterService
{
    public function handle($data)
    {
        $data = (object) $data;
        $appLetter = new ApplicationLetter;
        $appLetter->number = $data->number;
        $appLetter->date = $data->date;
        $appLetter->nisn = $data->nisn;
        $appLetter->company_id = $data->company_id;
        $appLetter->status = 1;
        $appLetter->save();
        
        return $appLetter;
    }
}