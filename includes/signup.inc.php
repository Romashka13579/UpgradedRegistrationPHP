<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST["username"];
    $pwd = $_POST["password"];
    $email = $_POST["email"];

    try {
        
        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';

        $errors = [];

        if(empty_inputs($username, $pwd, $email)){
            $errors["empty_username"] = "Fill in the username";
            $errors["empty_password"] = "Fill in the password";
            $errors["empty_email"] = "Fill in the email";
        }
        if(used_username($pdo, $username)){
            $errors["used_username"] = "Username is already used";
        }
        if(used_email($pdo, $email)){
            $errors["used_email"] = "Email is already used";
        }
        if(not_valid_email($email)){
            $errors["used_email"] = "Email is wrong";
        }

        if($errors){
            $_SESSION['signup_errors'] = $errors;

            $signupData = [
                "username" => $username,
                "email" => $email
            ];

            $_SESSION['signup_data'] = $signupData;

            header("Location: ../index.php");

            die();
        }

        create_user($username, $pwd, $email);

        header("Location: ../index.php?signup=success");

        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
else{
    header("Location: ../index.php");
    die();
}