<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [

            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'surname' => $this->surname,
            'patronymic' => $this->patronymic,
            'data_of_birth' => $this->data_of_birth,
            'gender' => $this->gender,
            'knowledge_of_languages' => $this->knowledge_of_languages,
            'phone' => $this->phone,
            'work_experience' => $this->work_experience,
            'key_skills' => $this->key_skills,
            'about_me' => $this->about_me,

        ];


        //  return parent::toArray($request);
    }
}
