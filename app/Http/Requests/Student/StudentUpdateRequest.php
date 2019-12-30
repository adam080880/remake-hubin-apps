<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;

class StudentUpdateRequest extends FormRequest
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
            'id' => 'required|exists:students,id',
            'name' => 'required|max:191',
            'nisn' => 'required|max:15',
            'nis' => 'required|max:15',
            'telp' => 'required|max:20',
            'classroom_id' => 'required|exists:classrooms,id'
        ];
    }
}
