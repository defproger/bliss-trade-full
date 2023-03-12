<?php
require_once 'init.php';
ini_set('display_errors', 1);
function db_getConnection()
{
    global $DB;
    $user = $DB['user'];
    $password = $DB['password'];
    $db = $DB['db'];
    $host = $DB['host'];
    $port = $DB['port'];

    static $dbh = null;
    if ($dbh != null) return $dbh;
    $dbh = new PDO("mysql:dbname=$db;host=$host;charset=utf8;port=$port", $user, $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    return $dbh;
}

function db_getAll($table)
{
    return db_getConnection()->query("SELECT * FROM `{$table}`")->fetchAll();
}


//$users = db_getAll('users');


function db_getById($table, $id, $column = 'id')
{
    return db_getConnection()->query("SELECT * FROM `{$table}` WHERE `{$column}`='{$id}'")->fetch();
}

//echo "<pre>";
//$user = db_getById('users',1);
//print_r($user);


function db_insert($table, $arr)
{
    $q = "INSERT INTO `{$table}`";
    $fields = array_keys($arr);
    $q .= "(`" . implode("`,`", $fields) . "`) VALUES (:" . implode(",:", $fields) . ")";
    $stmt = db_getConnection()->prepare($q);
    $stmt->execute($arr);
}

//inser 1 user
//db_insert('users', [
//    'name' => 'testuser',
//    'email' => 'test@test.com',
//    'password' => '15454841321321654684616'
//]);
function db_update($table, $id, $arr)
{
    $id = (int)$id;
    $q = "UPDATE `{$table}` SET ";
    $fields = array_keys($arr);
    $q .= implode("=?, ", $fields) . "=? WHERE id={$id}";
    $stmt = db_getConnection()->prepare($q);
    $stmt->execute(array_values($arr));
}


//db_update('users',231,[
//    'name'=>'updatename'
//]);
function db_delete($table, $id)
{
    $id = (int)$id;
    $stmt = db_getConnection()->query("DELETE FROM `{$table}` WHERE id={$id}");
}

//db_delete('users',11);

function formDate($date)
{
    return date("Y-m-d", strtotime($date));
}

function cryptpass($pass)
{
    return hash('sha256', $pass . 'loh228');
}
