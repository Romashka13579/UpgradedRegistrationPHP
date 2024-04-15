<?php

declare(strict_types=1);

function selectAllExcercises(object $pdo) {
    $query = "SELECT * FROM excercises;";

    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function selectExcercise(object $pdo, string $exc_id){
    $query = "SELECT * FROM excercises WHERE id = :exc_id;";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":exc_id", $exc_id);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function insertExcercise(object $pdo, array $userExcerciseData) {
    $query = "INSERT INTO users_excercises (username, exc_name, user_id, exc_id) VALUES (:username, :exc_name, :user_id, :exc_id);";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $userExcerciseData["username"]);
    $stmt->bindParam(":exc_name", $userExcerciseData["exc_name"]);
    $stmt->bindParam(":user_id", $userExcerciseData["user_id"]);
    $stmt->bindParam(":exc_id", $userExcerciseData["exc_id"]);
    $stmt->execute();
}

function selectPickedExcercisesID(object $pdo) {
    $query = "SELECT exc_id FROM users_excercises;";

    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchALL(PDO::FETCH_ASSOC);
    return $result;
}

function selectExcerciseByID(object $pdo, int $id) {
    $query = "SELECT * FROM excercises WHERE id = :id;";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}