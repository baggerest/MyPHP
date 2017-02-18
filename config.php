<?php
    error_reporting(0);

    $server = array(
        'user'=> 'root',
        'password' => 'root',
        'port_db' => 3306,
        'db_name' => 'ragnarok',
        'db_charset' => 'utf8',
        'db_type' => 'mysql',
        'language' => strtoupper(strtok(strip_tags($_SERVER['HTTP_ACCEPT_LANGUAGE']), ',')),
    );

    header("Content-Type:text/html; charset={$server['db_charset']}");

    include("message.php");
    include("connect.php");
    include("function.php");
    include("allclass.php");
