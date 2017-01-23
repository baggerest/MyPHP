<?php
    error_reporting(0);

    $server = array(
        'user'=> 'baggerest',
		'password' => '0936970907',
		'port_db' => 3306,
		'db_name' => 'ragnarok',
		'db_charset' => 'big5',

		'main' => '首頁',
		'register' => '註冊',
		'login' => '登入',
		'logout' => '登出',
		'changepassword' => '修改密碼',
		'recoverpassword' => '忘記密碼',
		'imformation' => '資料查詢',
		'download' => '下載專區',
        'language' => $_SERVER['HTTP_ACCEPT_LANGUAGE'],
    );

    header("Content-Type:text/html; charset={$server['db_charset']}");
?>