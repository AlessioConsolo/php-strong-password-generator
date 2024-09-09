<?php

function generatePassword($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()_+-={}:<>?';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $chars[rand(0, strlen($chars) - 1)];
    }
    return $password;
}

if (isset($_GET['password'])) {
    $length = (int) $_GET['password'];
    if ($length < 4) {
        $error = "Errore: la lunghezza della password deve essere maggiore di 4";
    } else {
        $password = generatePassword($length);
    }
}

?>