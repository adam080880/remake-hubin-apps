<?php

namespace App\Services\Generation;

use App\Generation;

class CreateGenerationService
{
    public function handle($data)
    {
        $data = (object) $data;
        $generation = new Generation;
        $generation->generation = $data->generation;
        $generation->from = $data->from;
        $generation->to = $data->to;
        $generation->save();

        return $generation;
    }
}