<?php

// Check to see if we have results before executing a loop

// The Connection
require('1-connect.php');

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