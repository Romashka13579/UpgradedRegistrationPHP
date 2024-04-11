<?php

declare(strict_types=1);

function empty_inputs(string $username, string $pwd) {
    if(empty($username) && empty($pwd)){
        return true;
    }
    else{
        return false;
    }
}

function not_existing_username(bool|array $result) {
    if(!$result){
        return true;
    }
    else{
        return false;
    }
}

function wrong_pwd(string $pwd, string $hashedPwd) {
    if(password_verify($pwd, $hashedPwd)){
        return false;
    }
    else{
        return true;
    }
}