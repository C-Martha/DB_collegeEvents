<?php 

//file to connect to databse


	

	session_start();

	require_once 'login.php';



	$userstring= "guest";

	if(isset($_SESSION['username']))

	{

		
		
		$user = $_SESSION['username'];

		$loggedin = TRUE;

		$userstring = "$user";

	}

	else

	{ 

		$loggedin = FALSE;

	}

?>


