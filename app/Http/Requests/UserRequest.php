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
            'name' => 'string',
            'email' => 'nullable',
            'password' => 'nullable',
            'surname' => 'string',
            'patronymic'=> 'string',
            'data_of_birth' => 'nullable',
            'gender' => 'string',
            'knowledge_of_languages' =>'string',
            'phone' => 'nullable',
            'work_experience' =>'string',
            'key_skills' => 'string',
            'about_me' => 'string',
        ];
    }
}
