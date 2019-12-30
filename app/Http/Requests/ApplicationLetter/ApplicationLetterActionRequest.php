<?php

namespace App\Http\Requests\ApplicationLetter;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationLetterActionRequest extends FormRequest
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
        $data = $this->all();        
        if($data['status'] == 3) {
            return [
                'date' => 'required',
                'from' => 'required',
                'to' => 'required',
                'number' => 'required',
                'id' => 'required|exists:application_letters,id|unique:cover_letters,application_id',
                'status' => 'required|in:3'
            ];
        } else if($data['status'] == 2) {
            return [                
                'id' => 'required|exists:application_letters,id',
                'status' => 'required|in:2'
            ];
        } else if($data['status'] == 1) {
            return [
                'id' => 'required|exists:application_letters,id',
                'status' => 'required|in:1,2,3'
            ];
        } else {
            return [
                'status' => 'required|in:1,2,3'
            ];
        }
    }
}
