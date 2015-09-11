<?php
	require_once 'tracker.php';
	$cid = $_POST['commentid'];
	$query ="DELETE FROM comments WHERE cid = '$cid'";
	$conn->query($query);
	die("<html><a href= 'profile.php'>Comment Deleted</a></html>");
?>