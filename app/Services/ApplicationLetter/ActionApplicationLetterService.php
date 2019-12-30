<?php

namespace App\Services\ApplicationLetter;

use App\ApplicationLetter;
use App\CoverLetter;

class ActionApplicationLetterService
{
    public function handle($data)
    {
        $data = (object) $data;
        $letter = ApplicationLetter::find($data->id);
        $return = [];
        
        $latest_status = $letter->status;        
        if($latest_status != 2) {                        

            $letter->status = $data->status;
            $coverLetter = new CoverLetter;
            $coverLetter->number = $data->number;
            $coverLetter->date = $data->date;
            $coverLetter->from = $data->from;
            $coverLetter->to = $data->to;    
            $coverLetter->verification = 1;        
            $letter->coverLetters()->save($coverLetter);

            $return['coverLetter'] = $coverLetter;
        } else {
            
            $letter->status = ($data->status == 1) ? 1 : 2;

        }

        $letter->save();
        $return['applicationLetter'] = $letter;

        return $return; 

    }
}