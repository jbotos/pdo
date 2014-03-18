<?php
 
// Get Results

// The Connection
try {
$handler = new PDO('mysql:host=127.0.0.1;dbname=app','john','hondarul');
$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo $e->getMessage();
	die();
}

// The MySql Query
$query = $handler->query('SELECT * FROM guestbook');
 
// Loop through the Results
while($r = $query->fetch())
{
	echo $r['message'], '<br>';
}
 