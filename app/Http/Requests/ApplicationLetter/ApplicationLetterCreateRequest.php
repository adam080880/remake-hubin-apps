<?php

namespace App\Http\Requests\ApplicationLetter;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ApplicationLetterCreateRequest extends FormRequest
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
            'number' => 'required',
            'date' => 'required',
            'nisn' => 'required|exists:students,nisn',            
            'company_id' => 'required|exists:companies,id',            
        ];
    }
}
