<?php
 
//file to connect to database
require_once 'login.php';
require_once 'tracker.php'; 

 
 
 
//variables to hold user input
$rsos_name = mysqli_real_escape_string($rso, $_POST['rso_name']); 
$admins_name = mysqli_real_escape_string($rso, $_POST['admin']); 
$stu2 = mysqli_real_escape_string($rso, $_POST['student2']); 
$stu3 = mysqli_real_escape_string($rso, $_POST['student3']); 
$stu4 = mysqli_real_escape_string($rso, $_POST['student4']); 
$stu5 = mysqli_real_escape_string($rso, $_POST['student5']); 
 
$flag = 0;
//$school_query = "SELECT university FROM students WHERE username = '$admins_name'";
//$university = $rso->query($school_query);
 
$query =  "SELECT * FROM rso WHERE rso_name = '$rsos_name'";
$dbresult = $rso->query($query); 
if(!$dbresult) die($conn->error); 
 
    if($dbresult > 0){
        echo 'rso already exists';
         
        } else {
    echo 'rso does not exists';
 
}
 
$checkStu = "SELECT * FROM students WHERE username = '$admins_name'";
$stuResult = $conn->query($checkStu);
if(!$stuResult) die($conn->error); 
if($stuResult > 0){
 
}else {
    $flag++;
}
$uni = mysqli_fetch_assoc($stuResult);
$checkUni = $uni["university"];
 
$checkStu1 = "SELECT * FROM students WHERE username = '$stu2'";
$stuResult1 = $conn->query($checkStu1);
if(!$stuResult1) die($conn->error); 
if($stuResult1 > 0){
 
}else {
    $flag++;
}
$uni1 = mysqli_fetch_assoc($stuResult1);
if($uni1["university"] != $checkUni) {
    $flag++;
    }
 
$checkStu2 = "SELECT * FROM students WHERE username = '$stu3'";
$stuResult2 = $conn->query($checkStu2);
if(!$stuResult2) die($conn->error); 
if($stuResult2 > 0){
 
}else {
    $flag++;
}
$uni2 = mysqli_fetch_assoc($stuResult2);
if($uni2["university"] != $checkUni) {
    $flag++;
    }
 
$checkStu3 = "SELECT * FROM students WHERE username = '$stu4'";
$stuResult3 = $conn->query($checkStu);
if(!$stuResult3) die($conn->error); 
if($stuResult3 > 0){
 
}else {
    $flag++;
}
$uni3 = mysqli_fetch_assoc($stuResult3);
if($uni3["university"] != $checkUni) {
    $flag++;
    }
 
$checkStu4 = "SELECT * FROM students WHERE username = '$stu5'";
$stuResult4 = $conn->query($checkStu);
if(!$stuResult4) die($conn->error); 
if($stuResult4 > 0){
 
}else {
    $flag++;
}
$uni4 = mysqli_fetch_assoc($stuResult4);
if($uni4["university"] != $checkUni) {
    $flag++;
    }
 
$num_default = 5;
 
if($flag == 0) {
    $newRso = "INSERT INTO rso (rso_name, admin, university, num_students)
                VALUES ('{$rsos_name}', '{$admins_name}', '{checkUni}', {$num_default}";
                 
    $rsoResult = mysqli_query($conn, $newRso);
    if(!$rsoResult) 
    {
        die("Database query failed.");
    }
     
}else {
	echo "<script> alert('Oops! Something went wrong. Go back and try again.'); window.location.href='rsoPage.php';
	</script>";
    die();
}
 
$stuJoin1 = "INSERT INTO rsoStudent (r_name, student_email)
             VALUES ('{$rsos_name}', '{$admins_name}')";
$joinResult1 = mysqli_query($conn, $stuJoin1);
if(!$joinResult1) {
    die("Database query failed");
    }
     
$stuJoin2 = "INSERT INTO rsoStudent (r_name, student_email)
             VALUES ('{$rsos_name}', '{$stu2}')";
$joinResult2 = mysqli_query($conn, $stuJoin2);
if(!$joinResult2) {
    die("Database query failed");
    }
 
$stuJoin3 = "INSERT INTO rsoStudent (r_name, student_email)
             VALUES ('{$rsos_name}', '{$stu3}')";
$joinResult3 = mysqli_query($conn, $stuJoin3);
if(!$joinResult3) {
    die("Database query failed");
    }
     
$stuJoin4 = "INSERT INTO rsoStudent (r_name, student_email)
             VALUES ('{$rsos_name}', '{$stu4}')";
$joinResult4 = mysqli_query($conn, $stuJoin4);
if(!$joinResult4) {
    die("Database query failed");
    }
     
$stuJoin5 = "INSERT INTO rsoStudent (r_name, student_email)
             VALUES ('{$rsos_name}', '{$stu5}')";
$joinResult5 = mysqli_query($conn, $stuJoin5);
if(!$joinResult5) {
    die("Database query failed");
    }
 
echo "<script>
alert('You created an RSO!');
window.location.href='rsoPage.php';
</script>";  
 
 //header("Location: rsoPage.php");
 
$conn->close();
?>