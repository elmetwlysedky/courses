<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
            'title' => 'required|string|max:191',
            'requirements' => 'nullable|string|max:191',
            'video_intro' => 'nullable|mimes:mp4,mov,ogg,qt|max:2000',
            'free' => 'required',
            'description'=>'required|string',
            'gender' => 'required',
            'active' => 'required',
            'price'=>'required|string|max:191',
            'image'=>'sometimes|image|max:1080',
            'teacher_id' => 'required',
            'interest_id' => 'required'
        ];
    }
}
