<?php

namespace App\Services\Company;

use App\Company;

class CreateCompanyService
{
    public function handle($data)
    {
        $data = (object) $data;
        $company = new Company;
        $company->name = $data->name;
        $company->address = $data->address;
        $company->receiver = $data->receiver;
        $company->location = $data->location;
        $company->kecamatan = $data->kecamatan;
        $company->kab_or_kota = $data->kab_or_kota;
        $company->provinsi = $data->provinsi;
        $company->phone = $data->phone;
        $company->save();

        return $company;
    }
}