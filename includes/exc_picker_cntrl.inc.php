<?php

declare(strict_types=1);

function getExcercises(object $pdo) {
    $excercises = selectExcercises($pdo);
    return $excercises;
}