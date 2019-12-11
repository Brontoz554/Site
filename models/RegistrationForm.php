<?php

namespace app\models;

use Yii;
use yii\base\Model;

class RegistrationForm extends Model
{
    public $username;
    public $password;
    public $full_name;

    public function rules()
    {
        return [
            [['username', 'password', 'full_name'], 'required'],
            ['full_name', 'string', 'min' => 10, 'max' => 100, 'tooShort' => 'Поле должно содержать минимум 10 символов'],
            ['password', 'string', 'max' => 100, 'tooShort' => 'Поле должно содержать максимум 100 символов'],
        ];
    }

}