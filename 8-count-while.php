<?php

// Check to see if we have results before executing a loop

// The Connection
try {
$handler = new PDO('mysql:host=127.0.0.1;dbname=app','john','hondarul');
$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo $e->getMessage();
	die();
}

// The MySQL Query
$query = $handler->query('SELECT * FROM guestbook');

// if count values exist
if($query->rowCount()) {
	// the loop
	while($r = $query->fetch(PDO::FETCH_OBJ)) {
		echo $r->message, '<br>';	
	}
} else {
	echo 'No results';
}