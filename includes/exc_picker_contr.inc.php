<?php

declare(strict_types=1);

function getAllExcercises(object $pdo) {
    $excercises = selectAllExcercises($pdo);
    return $excercises;
}

function getExcercise(object $pdo, string $exc_id) {
    $result = selectExcercise($pdo, $exc_id);
    return $result;
}

function createUserExcercise(object $pdo, array $userExcerciseData) {
    insertExcercise($pdo, $userExcerciseData);
}

function getAllPickedExcercises(object $pdo, int $user_id) {
    $excercisesID = selectPickedExcercisesID($pdo, $user_id);
    $pickedExcercises = [];
    foreach ($excercisesID as $excerciseID) {
        $pickedExcercise = selectExcerciseByID($pdo, $excerciseID["exc_id"]);
        array_push($pickedExcercises, $pickedExcercise);
    }
    return $pickedExcercises;
}

function excerciseNotPicked(object $pdo, int $exc_id, int $user_id) {
    if(!findPickedExcercise($pdo, $exc_id, $user_id)){
        return true;
    }
    else{
        return false;
    }
}