<?php

//Fetch Data into a Class

// The Connection
require('1-connect.php');

// The Query
$query = $handler->query('SELECT * FROM guestbook');
//echo '<pre>', print_r($query->fetchAll(PDO::FETCH_ASSOC)), '</pre>';

$results = $query->fetchAll(PDO::FETCH_ASSOC);

echo '<pre>', print_r($results), '</pre>';

for($i = 0; $i < count($results); $i++) {
	echo $results[$i]["name"] . '<br>';	
}
