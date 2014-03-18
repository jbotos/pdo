<?php
 
// Connec to Databse with PHP Data Objects
 
//driver:host=127.0.0.1, database, 

$db_host = "127.0.0.1";
$db_username = "john";
$db_pass = "hondarul";
$db_name = "app";

try {
$handler = new PDO("mysql:host={$db_host};dbname={$db_name}","{$db_username}","{$db_pass}");
$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo $e->getMessage();
	die();
}
 