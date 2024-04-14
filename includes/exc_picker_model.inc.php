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