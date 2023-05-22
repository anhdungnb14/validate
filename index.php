<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once __DIR__ . '/ValidateService.php';

$dataForm = [
    'name' => '',
    'email' => 'a',
    'phone' => '',
];
$rules = [
    'name' => 'required',
    'email' => 'required|email|min:3|between:3,5|required_with:name',
    'phone' => 'required',

];
$messages = [
    'name.required' => 'name khong duoc de trong',
    'phone.required' => 'phone khong duoc de trong',
    'email.required' => 'email khong duoc de trong',
    'email.email' => 'email khong hop le',
    'email.min' => 'email phai co it nhat 3 ky tu',
];

//init data
$validate = new ValidateService($dataForm);
$validate->setRules($rules);
$validate->setMessages($messages);
//validate
$validate->validate();
if ($validate->countErorrs()) {
    var_dump($validate->getErrors());
} else {
    echo 'submit';
}





