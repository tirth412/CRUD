<?php

$dbserver = 'localhost';
$dbhost = 'root';
$dbpass = '';
$dbname = 'data';

$conn = mysqli_connect($dbserver,$dbhost,$dbpass,$dbname);
if($conn)
{
	//echo "Connection OK";
}
else
{
	echo "connection failed";
}

?>