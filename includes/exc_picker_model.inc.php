<?php

declare(strict_types=1);

function selectExcercises(object $pdo) {
    $query = "SELECT * FROM excercises;";

    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}