<?php

namespace App\Http\Requests\Company;

use Illuminate\Foundation\Http\FormRequest;

class CompanyUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id' => 'required|exists:companies,id',
            'name' => 'required|max:191',
            'address' => 'required',
            'receiver' => 'required|max:191',
            'location' => 'required|max:191',
            'kecamatan' => 'required|max:191',
            'kab_or_kota' => 'required|max:191',
            'provinsi' => 'required|max:191',
            'phone' => 'required|max:191'
        ];
    }
}
