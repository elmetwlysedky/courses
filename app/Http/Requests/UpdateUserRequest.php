<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name'=>'required|string|max:191',
            'email'=>'required|email|max:191|unique:users,email,'.$this->user,
            'password'=>'nullable|string|confirmed',
            'phone' =>'required|string|max:15',
            'country_id' =>'required|string|max:225',
            'is_teacher' =>'required',
            'gender' =>'required|string',
            'avatar' =>'nullable|max:2048',
        ];
    }
}