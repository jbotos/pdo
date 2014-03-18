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