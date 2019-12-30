<?php

namespace App\Services\Generation;

use App\Generation;

class UpdateGenerationService
{
    public function handle($data)
    {
        $data = (object) $data;
        $generation = Generation::find($data->id);
        $generation->generation = $data->generation;
        $generation->from = $data->from;
        $generation->to = $data->to;
        $generation->save();

        return $generation;
    }
}