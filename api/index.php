<?php

$database_path = __DIR__ . '../database/tasks.json';

$json_data = file_get_contents($database_path);

$tasks = json_decode($json_data, true);


$new_task = $_POST('task') ?? null;
if ($new_task) {
    $tasks[] = $new_task;
}

header('Content-Type: application/json');

echo json_encode($tasks);
