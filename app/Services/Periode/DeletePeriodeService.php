<?php

namespace App\Services\Periode;

use App\Periode;

class DeletePeriodeService
{
    public function handle($data)
    {
        $data = (object) $data;
        $periode = Periode::find($data->id);    
        $periode->delete();

        return $periode;
    }
}