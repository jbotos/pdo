<?php

//Fetch Data into a Class

// The Connection
try {
$handler = new PDO('mysql:host=127.0.0.1;dbname=app','john','hondarul');
$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo $e->getMessage();
	die();
}

// The Class
class GuestbookEntry {
	public $id, $name, $message, $posted, $entry;	
	
	public function __construct() {
		$this->entry = "{$this->name} posted: {$this->message}";
	}
}

// The Query
$query = $handler->query('SELECT * FROM guestbook');

// Fetch Results into Class
$query->setFetchMode(PDO::FETCH_CLASS, 'GuestbookEntry');

// Loop through the Result
while($r = $query->fetch()) {
	//echo '<pre>', print_r($r), '</pre>';
	echo $r->entry, '<br>';
}