<?php
$dns = "mysql:dbname=meudb;host=mysql_db";
$hUser = "root";
$hPass = "root";
    try {
    $pdo = new PDO("$dns","$hUser","$hPass");
    } catch (PDOException $erro) {
        echo 'erro: '.$erro->getMessage();
    };
?>