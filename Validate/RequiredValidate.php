<?php
require_once __DIR__ . '/Rule.php';

class RequiredValidate extends Rule
{

    public function passedValidate($fieldName, $valueRule, $dataForm)
    {
        return $valueRule ? true : false;
    }

    public function getMessage($fieldName, $message)
    {

        return $message ?? $fieldName . ' not empty';
    }
}
