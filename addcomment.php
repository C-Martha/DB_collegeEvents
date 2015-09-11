<?php
	require_once 'tracker.php';
	$comment= $_POST['comment'];
	$user = $_SESSION['username'];
	$event = $_POST['eventid'];
	$query ="INSERT into comments(username,eID,comment) VALUES('$user','$event','$comment')";
	$conn->query($query);
	die("<html><a href= 'profile.php'>Comment Added</a></html>");
?>