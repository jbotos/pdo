<?php

//Fetch Data into a Class

// The Connection
require('1-connect.php');

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