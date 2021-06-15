<?php
require_once ('vendor/autoload.php');


if(new \Autoframe\MysqlMysqli\compatibilityMySQL()){
	echo 'function exists : mysql_connect()';
	return true;
}
else{
	echo 'function does not exist : mysql_connect()';
	return false;
}
