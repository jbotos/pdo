<?php

//Retrieve the last id

try {
$handler = new PDO('mysql:host=127.0.0.1;dbname=app','john','hondarul');
$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo $e->getMessage();
	die();
}
 

$name = 'even'; //$_POST['name'];
$message = 'i need to learn more'; //$_POST['message'];

/*$sql = "INSERT INTO guestbook (name, message, posted) VALUES (:name, :message, NOW())";
$query = $handler->prepare($sql);

$query->execute(array(
	':name' => $name,
	':message' => $message
));*/

$sql = "INSERT INTO guestbook (name, message, posted) VALUES (?, ?, NOW())";
$query = $handler->prepare($sql);

$query->execute(array($name, $message)); 

// Get the last inserted value
echo $handler->lastInsertId();