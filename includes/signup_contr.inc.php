<?php

declare(strict_types=1);

function empty_inputs(string $username,string $pwd,string $email){
    if(empty($username) || empty($pwd) || empty($email)){
        return true;
    }
    else{
        return false;
    }
}

function not_valid_email(string $email){
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return true;
    }
    else{
        return false;
    }
}

function used_username(object $pdo, string $username) {
    if(get_username($pdo, $username)){
        return true;
    }
    else {
        return false;
    }
}

function used_email(object $pdo, string $email) {
    if(get_email($pdo, $email)){
        return true;
    }
    else {
        return false;
    }
}

function create_user(object $pdo, string $username,string $pwd,string $email) {
    set_user($pdo, $username, $pwd, $email);
}