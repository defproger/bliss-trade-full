<?php
ini_set('display_errors', 0);
require_once '../app/db.php';
$id = $_COOKIE['id'];
$user = db_getById('users', $id);
db_update('users', $user['id'], [
    'ip' => $_SERVER['REMOTE_ADDR']
]);
