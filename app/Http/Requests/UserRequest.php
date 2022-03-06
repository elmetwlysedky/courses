<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' =>'required|string|max:20',
            'country_id' =>'required|string|max:225',
            'is_teacher' =>'required',
            'gender' =>'required|string',
            'avatar' =>'image|max:2048',
            'password' => 'required|string|confirmed'
        ];
    }
}
