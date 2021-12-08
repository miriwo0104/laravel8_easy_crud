<?php

namespace App\Validator;

use Illuminate\Validation\Validator;

class CustomValidator extends Validator
{
    public function validateNumOnly($attribute, $value)
    {
        dd($this->data['otherStr']);
        return (preg_match("/^[0-9 ]+$/i", $value));
    }
}