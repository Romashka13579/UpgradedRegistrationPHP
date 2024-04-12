<?php

try {
        
    require_once 'dbh.inc.php';
    require_once 'exc_picker_model.inc.php';
    require_once 'exc_picker_contr.inc.php';

    $excercises = getExcercises($pdo);

    require_once 'config_session.inc.php';

    $_SESSION['existing_excercises'] = $excercises;

    header("Location: ../index.php");

    $pdo = null;
    $stmt = null;

    die();

} catch (PDOException $e) {
    die($e->getMessage());
}