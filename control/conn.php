<?php 
    $databaseHost = 'localhost:3306';
    $databaseName = 'jaspuebl_jaspueblasur2022';
    $databaseUsername = 'jaspuebl_jaspueblasa';
    $databasePassword = 'KEIU8De\Y*_7yLUL';
    try {
    $dbConn = new PDO("mysql:host={$databaseHost};dbname={$databaseName}", $databaseUsername, 
    $databasePassword);
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo $e->getMessage();
        }                
?>