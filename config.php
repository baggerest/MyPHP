<?php
    error_reporting(0);

    $server = array(
        'user'=> 'baggerest',
        'password' => '0936970907',
        'port_db' => 3306,
        'db_name' => 'ragnarok',
        'db_charset' => 'utf8',

        'main' => '�^�p�A���έ���',
        'title' => $language['zh-tw'].'�p�A����',
        'register' => '���U',
        'login' => '�n�J',
        'logout' => '�n�X',
        'changepassword' => '�ק�K�X',
        'recoverpassword' => '�ѰO�K�X',
        'imformation' => '��Ƭd��',
        'download' => '�U���M��',
        'language' => $_SERVER['HTTP_ACCEPT_LANGUAGE'],
    );

    header("Content-Type:text/html; charset={$server['db_charset']}");
?>