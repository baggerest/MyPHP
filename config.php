<?php
    error_reporting(0);

    $server = array(
        'user'=> 'baggerest',
        'password' => '0936970907',
        'port_db' => 3306,
        'db_name' => 'ragnarok',
        'db_charset' => 'big5',

        'main' => '�^���έ���',
        'title' => '�p�A����',
        'register' => '���U',
        'login' => '�n�J',
        'logout' => '�n�X',
        'changepassword' => '�ק�K�X',
        'recoverpassword' => '�ѰO�K�X',
        'imformation' => '��Ƭd��',
        'download' => '�U���M��',
        'language' => strtoupper(strtok(strip_tags($_SERVER['HTTP_ACCEPT_LANGUAGE']), ',')),
    );

    header("Content-Type:text/html; charset={$server['db_charset']}");
?>