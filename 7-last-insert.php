<?php

//Retrieve the last id

// The Connection
require('1-connect.php');
 
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