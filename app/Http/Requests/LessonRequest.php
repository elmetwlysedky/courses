<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LessonRequest extends FormRequest
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
            'name' => 'required|string|max:119',
            'video' => 'nullable|mimes:mp4,mov,ogg,qt|max:20000',
            'image' => 'nullable|image',
            'description' => 'required|string',
            'sequence' => 'required|string|unique:lessons,sequence,' . request()->segment(3) . ',id',
            'course_id' => 'sometimes'
        ];
    }
}
