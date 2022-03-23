<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
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
            'course_id' => 'required',
            'ask' => 'required|string',
            'answer_1' => 'required|string|max:191',
            'answer_2' => 'required|string|max:191',
            'answer_3' => 'required|string|max:191',
            'answer_4'=> 'required|string|max:191',
            'num_answer' => 'required',
        ];
    }
}
