<?php

//Fetch Data into a Class

try {
$handler = new PDO('mysql:host=127.0.0.1;dbname=app','john','hondarul');
$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo $e->getMessage();
	die();
}


// The Query
$query = $handler->query('SELECT * FROM guestbook');
//echo '<pre>', print_r($query->fetchAll(PDO::FETCH_ASSOC)), '</pre>';

$results = $query->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>', print_r($results), '</pre>';

for($i = 0; $i < count($results); $i++) {
	echo $results[$i]["name"] . '<br>';	
}
