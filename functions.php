<?php
function createPassword($pwd_length)
{
    $chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()';
    $password = '';

    for ($i = 0; $i < $pwd_length; $i++) {
        $password .= $chars[rand(0, strlen($chars))];
    };
    return $password;
};

if (isset($_GET['pwd_length'])) {
    $pwd_length = $_GET['pwd_length'];
    if (is_numeric($pwd_length)) {
        $secure_pwd = createPassword($pwd_length);
    };
};
?>