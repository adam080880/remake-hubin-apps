<?php

namespace App\Services\Generation;

use App\Generation;

class DeleteGenerationService
{
    public function handle($data)
    {
        $data = (object) $data;
        $generation = Generation::find($data->id);        
        $generation->delete();

        return $generation;
    }
}