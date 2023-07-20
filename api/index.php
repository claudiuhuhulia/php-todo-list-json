<?php

$tasks = ["HTML", "CSS", "JavaScript", "PHP"];

header('Content-Type: application/json');

echo json_encode($tasks);
