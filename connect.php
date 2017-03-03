<?php
    try{
        $pdo = new PDO("{$server['db_type']}:host={$server['ip']};dbname={$server['db_name']};port={$server['port_db']};charset={$server['db_charset']}",$server['user'],$server['password']);
    }catch(PDOException $e){
        echo $e->getMessage()."<br>";
        if(strpos($e->getMessage(),"Unknown database")){
            $pdo = new PDO("{$server['db_type']}:host={$server['ip']};port={$server['port_db']};charset={$server['db_charset']}",$server['user'],$server['password']);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "CREATE DATABASE `{$server['db_name']}` CHARACTER SET {$server['db_charset']} COLLATE {$server['charset_collate']}";
            $pdo->exec($sql);
            echo "Create database {$server['db_name']} successly";
            header("Refresh:3; url=index.php");
        }
        die();
    }