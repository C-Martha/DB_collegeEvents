<?php
	require_once 'tracker.php';
	function destroySession()
	{
		$_SESSION=array();
		if (session_id() != "" || isset($_COOKIE[session_name()]))
		setcookie(session_name(), '', time()-2592000, '/');
		session_destroy();
	}
	if (isset($_SESSION['username']))
	{
		destroySession();
		echo "<div class='main'>You have been logged out. Please " .
			"<a href='logReg.html'>click here</a> to refresh the screen.";
	}
	else echo "<div class='main'><br>" .
		"You cannot log out because you are not logged in";
?>
<br><br></div>
</body>
</html>