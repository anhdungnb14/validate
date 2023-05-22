<?php
require_once __DIR__ . '/Rule.php';

class EmailValidate extends Rule
{

    public function passedValidate($fieldName, $valueRule, $dataForm)
    {
        if (filter_var($valueRule, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    public function getMessage($fieldName, $message)
    {
        return $message ? $message : $fieldName . ' is a valid email address';
    }
}
