<?php

namespace App\Services\Periode;

use App\Periode;

class UpdatePeriodeService
{
    public function handle($data)
    {
        $data = (object) $data;
        $periode = Periode::find($data->id);
        $periode->periode = $data->periode;
        $periode->save();

        return $periode;
    }
}