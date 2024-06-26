<?php

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $exc_id = $_POST["exc_id"];

    try {
        require_once 'dbh.inc.php';
        require_once 'exc_picker_model.inc.php';
        require_once 'exc_picker_contr.inc.php';

        require_once 'config_session.inc.php';

        $day_of_the_week = $_SESSION['week_day'];

        $picker_errors = [];

        if(!isset($_SESSION['user_id'])){
            $picker_errors["not_loged_in"] = "User is not loged in";
        }

        if($picker_errors){
            $_SESSION['picker_errors'] = $picker_errors;

            header("Location: ../index.php");

            die();
        }

        $excerciseInfo = getExcercise($pdo, $exc_id);
        
        if($excerciseInfo && isset($_SESSION['user_id'])) {
            if(excerciseNotPicked($pdo, $excerciseInfo["id"], $_SESSION['user_id'])){
                $userExcerciseData = [
                    "username" => $_SESSION['user_username'],
                    "exc_name" => $excerciseInfo["exc_name"],
                    "user_id" => $_SESSION['user_id'],
                    "exc_id" => $excerciseInfo["id"],
                    "week_day" => $day_of_the_week,
                    "exc_sets" => 3,
                    "reps" => 8,
                    "volume" => 10,
                ];
    
                createUserExcercise($pdo, $userExcerciseData);
            }
        }

        header("Location: ../schedule.php");

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