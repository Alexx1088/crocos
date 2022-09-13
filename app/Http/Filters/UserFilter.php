<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class UserFilter extends AbstractFilter
{
    public const NAME = 'name';
    public const EMAIL = 'email';
    public const SURNAME = 'surname';
    public const PATRONYMIC = 'patronymic';
    public const DATA_OF_BIRTH = 'data_of_birth';
    public const GENDER = 'gender';
    public const KNOWLEDGE_OF_LANGUAGES = 'knowledge_of_languages';
    public const PHONE = 'phone';
    public const WORK_EXPERIENCE = 'work_experience';
    public const KEY_SKILLS = 'key_skills';
    public const ABOUT_ME = 'about_me';


    protected function getCallbacks(): array
    {
        // TODO: Implement getCallbacks() method.

        return [
            self::NAME => [$this, 'name'],
            self::EMAIL => [$this, 'email'],
            self::SURNAME => [$this, 'surname'],
            self::PATRONYMIC => [$this, 'patronymic'],
            self::DATA_OF_BIRTH => [$this, 'data_of_birth'],
            self::GENDER => [$this, 'gender'],
            self::KNOWLEDGE_OF_LANGUAGES => [$this, 'knowledge_of_languages'],
            self::PHONE => [$this, 'phone'],
            self::WORK_EXPERIENCE => [$this, 'work_experience'],
            self::KEY_SKILLS => [$this, 'key_skills'],
            self::ABOUT_ME => [$this, 'about_me'],

        ];
    }

    public function name(Builder $builder, $value)
    {
        $builder->where('name', 'like', "%{$value}%");
    }

    public function surname(Builder $builder, $value)
    {
        $builder->where('surname', 'like', "%{$value}%");
    }

    public function patronymic(Builder $builder, $value)
    {
        $builder->where('patronymic', 'like', "%{$value}%");
    }

    public function data_of_birth(Builder $builder, $value)
    {
        $builder->where('data_of_birth', 'like', "%{$value}%");
    }

    public function gender(Builder $builder,$value)
    {
       $builder->where('gender', 'like', "%{$value}%");

    }

    public function knowledge_of_languages(Builder $builder,$value)
    {
        $builder->where('knowledge_of_languages', 'like', "%{$value}%");

    }

    public function phone(Builder $builder,$value)
    {
        $builder->where('phone', 'like', "%{$value}%");

    }

    public function email(Builder $builder,$value)
    {
        $builder->where('email', 'like', "%{$value}%");

    }

    public function work_experience(Builder $builder,$value)
    {
        $builder->where('work_experience', 'like', "%{$value}%");

    }

    public function key_skills(Builder $builder,$value)
    {
        $builder->where('key_skills', 'like', "%{$value}%");

    }

    public function about_me(Builder $builder,$value)
    {
        $builder->where('about_me', 'like', "%{$value}%");

    }


}