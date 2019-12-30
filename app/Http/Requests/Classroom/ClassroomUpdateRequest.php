<?php

namespace App\Http\Requests\Classroom;

use Illuminate\Foundation\Http\FormRequest;

class ClassroomUpdateRequest extends FormRequest
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
            'id' => 'required|exists:classrooms,id',
            'classroom' => 'required|max:191',
            'homeroom_teacher' => 'required|max:191',
            'major_id' => 'required|exists:majors,id',
            'generation_id' => 'required|exists:generations,id',
            'periode_id' => 'required|exists:periodes,id'
        ];
    }
}
