<?php

function pluck($array, $key)
{
    return array_map(function ($item) use ($key) {
        return is_object($item) ? $item->$key : $item[$key];
    }, $array);
}

function sum($a, $b)
{
    return $a + $b;
}

function output($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';

}

function auhtenticate_user($email, $password)
{
    return $email == USER_EMAIL && $password == USER_PASSWORD;
}

function redirect($url) {
    return header("Location: $url");
}

function is_user_authenticated() {
    return isset($_SESSION['email']);
}

function ensure_user_is_authenticated() {
    if (!is_user_authenticated()) {
        redirect('login.php');
        die();
    }
}

