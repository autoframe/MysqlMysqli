<?php
require_once ('vendor/autoload.php');

use Autoframe\MysqlMysqli\CompatibilityMySQL;

if(new CompatibilityMySQL()){
	echo 'function exists : mysql_connect()';
	return true;
}
else{
	echo 'function does not exist : mysql_connect()';
	return false;
}
