<?php

header('Content-Type: application/json');

//print_r($_POST);
echo json_encode([
    "success" => true,
    "url" => 'https://rt.pornhub.com/'
]);
