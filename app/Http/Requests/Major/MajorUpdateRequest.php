<?php

namespace App\Http\Requests\Major;

use Illuminate\Foundation\Http\FormRequest;

class MajorUpdateRequest extends FormRequest
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
            'id' => 'required|exists:majors,id',
            'major' => 'required|max:191'
        ];
    }
}
