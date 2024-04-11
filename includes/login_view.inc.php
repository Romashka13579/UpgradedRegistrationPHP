<?php

declare(strict_types=1);

function check_login_errors() {
    if(isset($_SESSION["login_errors"])){
        $errors = $_SESSION["login_errors"];

        foreach ($errors as $error) {
            ?> <div class = "error"> <?php echo $error ?> </div> <?php
        }

        unset($_SESSION['login_errors']);
    }
    else if(isset($_GET["login"]) && $_GET["login"] == "success"){
        ?> <div class = "success"> Log in success </div> <?php
    }
    else{
    }
}