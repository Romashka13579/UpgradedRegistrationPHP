<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $day = $_POST["day"];

    try {
        
        require_once 'dbh.inc.php';

        require_once 'config_session.inc.php';

        if(!empty($day)){
            $_SESSION['week_day'] = $day; 
        }

        header("Location: ../exc_picker.php");

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