<?php

//Fetch Data into a Class

try {
$handler = new PDO('mysql:host=127.0.0.1;dbname=app','john','hondarul');
$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo $e->getMessage();
	die();
}



class GuestbookEntry {
	public $id, $name, $message, $posted, $entry;	
	
	public function __construct() {
		$this->entry = "{$this->name} posted: {$this->message}";
	}
}

$query = $handler->query('SELECT * FROM guestbook');
$query->setFetchMode(PDO::FETCH_CLASS, 'GuestbookEntry');
// set fetch mode
while($r = $query->fetch()) {
	// output 
	//echo '<pre>', print_r($r), '</pre>';
	echo $r->entry, '<br>';
}