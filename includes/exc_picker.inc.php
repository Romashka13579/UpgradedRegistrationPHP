<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];
    $email = $_POST["email"];

    try {
        require_once 'dbh.inc.php';
        require_once 'exc_picker_model.inc.php';
        require_once 'exc_picker_contr.inc.php';

        require_once 'config_session.inc.php';

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