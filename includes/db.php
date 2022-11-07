<?php

    $host = 'localhost';
    $port = 3306;
    $db = 'tour';
    $user = 'root';
    $password = '';

    try{
        $pdo = new PDO("mysql:host=".$host.";port=".$port.";dbname=".$db, $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(Exception $ex){
        echo $ex->getMessage();
        die();
    }
?>