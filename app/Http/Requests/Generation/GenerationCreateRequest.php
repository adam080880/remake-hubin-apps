<?php

namespace App\Http\Requests\Generation;

use Illuminate\Foundation\Http\FormRequest;

class GenerationCreateRequest extends FormRequest
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
            'generation' => 'required|max:191',
            'from' => 'required',
            'to' => 'required'
        ];
    }
}
