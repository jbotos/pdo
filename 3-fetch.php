<?php

// Different types of Fetch(FETCH_BOTH, FETCH_NUM, FETCH_ASSOC)
 
// The Connection
require('1-connect.php');

$query = $handler->query('SELECT * FROM guestbook');

//print_r($query->fetch());

/*while($r = $query->fetch()) {
	echo $r['message'] . '<br>';	
}*/


echo '<hr>';
/*
 * PDO::FETCH_BOTH - Numeric and Associative arrays
Array
{
	[id] => 1
	[0] => 1
	[name] => Alex
	[1] = Alex
}	

 * PDO::FETCH_NUM - Numeric arrays only
Array
{
	[0] => 1
	[1] => Alex
}

 * PDO::FETCH_ASSOC
Array
{
	[id] => 1
	[name] => Alex
}

 * PDO::FETCH_OBJ
 Array
{
	[id] => 1
	[name] => Alex
}
*/

while($r = $query->fetch(PDO::FETCH_OBJ))
{
	echo $r->name . ' ' . $r->message, '<br>';
}

echo 'The rest of our page';