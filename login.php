<?php
	//info to log into database 

	$hn = 'localhost';

	$db = 'dataproj';
	
$un = 'root';
	
$pw = ''; 


	$conn = new mysqli($hn, $un, $pw, $db);
 
	// Check connection
	if ($conn->connect_error) 
	{
    		die("Connection failed: " . $conn->connect_error);
	} 
?>
