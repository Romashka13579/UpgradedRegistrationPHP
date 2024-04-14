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