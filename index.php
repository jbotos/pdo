<?php
 
//driver:host=127.0.0.1, database, 
try {
$handler = new PDO('mysql:host=127.0.0.1;dbname=app','john','hondarul');
$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo $e->getMessage();
	die();
}

$query = $handler->query('SELECT * FROM guestbook');

//print_r($query->fetch());

while($r = $query->fetch()) {
	echo $r['message'] . '<br>';	
}


echo 'The rest of our page';