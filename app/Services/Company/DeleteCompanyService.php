<?php

namespace App\Services\Company;

use App\Company;

class DeleteCompanyService
{
    public function handle($data)
    {
        $data = (object) $data;
        $company = Company::find($data->id);
        $company->delete();

        return $company;
    }
}