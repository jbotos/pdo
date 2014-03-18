<?php
 
// Get Results

// The Connection
require('1-connect.php'); 

// The MySql Query
$query = $handler->query('SELECT * FROM guestbook');
 
// Loop through the Results
while($r = $query->fetch())
{
	echo $r['message'], '<br>';
}
 