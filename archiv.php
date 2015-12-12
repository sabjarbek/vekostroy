<?php
require_once 'login.php';
$db_server=mysql_connect($db_hostname,$db_username,$db_password);
if (!$db_server) die ("Невозможно подключиться к MYSQL:". mysql());
mysql_select_db ($db_database) or die ("НЕВОЗМОЖНО выбрать базу данных" .mysql_error());
$query ="CREATE TABLE otzyv (
id SMALLINT NOT NULL AUTO_INCREMENT,
order VARCHAR(32) NOT NULL,
ball VARCHAR(32) NOT NULL,
brigada VARCHAR(32) NOT NULL,
comment VARCHAR (32) NOT NULL
)";
$result=mysql_query($query);
if(!$result) die ("Сбой при доступе к базе данных:".mysql_error());
?>