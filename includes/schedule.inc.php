<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST["day"];

    try {
        
        require_once 'dbh.inc.php';

        header("Location: ../exc_picker.php?signup=$username");

        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {
        die($e->getMessage());
    }
}
else{
    header("Location: ../registration.php");
    die();
}