<?php
//~ Старт сессии, файл должен быть сохранен без DOM информации
session_start();

include_once 'module.php';

//~ Параметры потключения к бд
$db_host = 'localhost';
$db_login = '';
$db_passwd = '';
$db_name = 'test_session';

// подключаемся к бд
$db = new mysql(); //~ Создаем новый объект класса
$db -> connect($db_host, $db_login, $db_passwd, $db_name);
?>
