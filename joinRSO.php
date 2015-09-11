<?php
 
require_once 'login.php';
require_once 'tracker.php';
 
 
$user = $_SESSION['username'];
$selected = $_POST['join'];
 
$forUpdate = "SELECT rso_name FROM rso WHERE rso_id = '$selected'";
$result = mysqli_query($conn, $forUpdate);
$rname = mysqli_fetch_assoc($result);
$rso = $rname['rso_name'];
 
 /*
$join = "UPDATE rso SET num_students = num_students + 1 WHERE rso_id = '$selected'";
$joinResult = mysqli_query($conn, $join);
if(!$joinResult) {
    //error
    die("Database query failed");
}
 */
 
$checkStu = "SELECT * FROM rsoStudents WHERE student_email = '$user' AND rso_name = '$rso'";
$checkResult = mysqli_query($conn, $checkStu);
if($checkResult->num_rows > 0) {
    $flag = 1; 
}else {
    $flag = 0;
}
 
if($flag == 0) {
    $joinStu = "INSERT INTO rsoStudents (rso_name, student_email)
                VALUE ('{$rso}', '{$user}')";
    $studentResult = mysqli_query($conn, $joinStu);
    if(!$studentResult) {
        die("Database query failed" .$user. ".");
        }
      
    $join = "UPDATE rso SET num_students = num_students + 1 WHERE rso_id = '$selected'";
	$joinResult = mysqli_query($conn, $join);
	if(!$joinResult) {
    	//error
    	die("Database query failed");
		}  
	
	echo "<script>
	alert('You joined an RSO!');
	window.location.href='rsoPage.php';
	</script>"; 
	
}else {
       echo "<script>
	alert('You are already part of that RSO.');
	window.location.href='rsoPage.php';
	</script>"; 
}

/* 
echo "<script>
alert('You joined an RSO!');
window.location.href='rsoPage.php';
</script>"; 
 */
//header("Location: rsoPage.php"); 


$conn->close();
?>