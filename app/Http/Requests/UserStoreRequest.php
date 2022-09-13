<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
            'name' => 'required|string|max:30',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|max:30',
            'surname' => 'required|string|max:30',
            'patronymic' => 'required|string|max:30',
            'data_of_birth' => 'required|date',
            'gender' => 'required|string',
            'knowledge_of_languages' => 'required|string',
            'phone' => 'required',
            'work_experience' => 'required|string',
            'key_skills' => 'required|string',
            'about_me' => 'required|string',
        ];
    }
}
