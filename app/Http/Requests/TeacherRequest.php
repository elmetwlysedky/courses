<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
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
            'degree' => 'nullable|string|max:225',
            'specialization'=>'nullable|string|max:225',
            'employment'=>'required|string|max:225',
            'cv'=>'nullable',
            'user_id' => 'required',
        ];
    }
}
