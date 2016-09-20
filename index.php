<?php
require_once('mysqlDB.php');


$config = array(
    'host'=>'localhost',
    'port'=>'3306',
    'username'=>'root',
    'password'=>'root',
    'charset'=>'utf8',
    'dbname'=>'Joker',
);

$mysql = new mysqlDB($config);

if($mysql->query("ALTER TABLE geziqiang RENAME stu") === true){
    echo 'success';
}else{
    echo 'failed'.$mysql::$link->error;
}


?>