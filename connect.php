<?php
    try{
        $pdo = new PDO("mysql:host={$server['ip']};dbname={$server['db_name']};port={$server['port_db']};charset={$server['db_charset']}",$server['user'],$server['password']);
    }catch(PDOException $e){
        echo $e->getMessage();
        die();
    }
