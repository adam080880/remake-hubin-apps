<?php

namespace App\Services\Periode;

use App\Periode;

class CreatePeriodeService
{
    public function handle($data)
    {
        $data = (object) $data;
        $periode = new Periode;
        $periode->periode = $data->periode;
        $periode->save();

        return $periode;
    }
}