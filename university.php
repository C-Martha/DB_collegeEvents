<?php
 
//file to connect to database
require_once 'login.php';
require_once 'tracker.php';
 
 
$username = $_SESSION['username']; 
 
//variables to hold user input
$u_name = $_POST['uniName'];
$u_location = $_POST['location']; 
$u_description = $_POST['description']; 
$u_students = $_POST['num_stu']; 
//$u_students = $_POST['num_stu'];
//$counter = mysqli_real_escape_string($rso, $_POST['count']); 
$website = $_POST['link']; 
 
$flag = 0;
 
$query =  "SELECT * FROM university WHERE u_name = '$u_name' ";

 $result = $conn->query($query); 
 $num = $result->num_rows;

    if($num > 0){
       // echo 'rso already exists';
       $flag++;
         
        } else {
    //echo 'Univesity does not exists';
 
}
$counter = 1;
 
if($flag == 0) {
    $newUniversity = "INSERT INTO university (u_name, location, description, num_students, counter, website)
                    VALUES ('{$u_name}', '{$u_location}', '{$u_description}', '{$u_students}', '{$counter}', '{$website}')";
     
   if ($conn->query($newUniversity) == TRUE) {
      // echo "New record created successfully";
    } else {   
        echo "Thanks! but " . $u_name . "  profile already exists! "; 
        //echo "Error: " . $newUniversity . "<br>" . $conn->error;
    }
} 
$makeSuper = "UPDATE students SET access = 'super admin' WHERE username = '$username' ";
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="events.css">

</head>
<body background = "college-background.jpg">
  
 <!-- banner -->
 
    <div class="jumbotron">
      <div class='col-sm-offset-2'>
      <h1>College Events -University Profile- </h1>
		<p><nav>
		<a href='profile.php'>Profile Home</a>|
  		<a href='rsoPage.php'>RSO Page</a>|
  		<a href='eventsCreate.html'>Create Event</a>|
  		<a href='uniProfile.php'>Create University Profile</a>|
		<a href='logout.php'>Logout</a>|
		</nav> </p>
      <p> </p> 
    </div>
       </div>
  <div class="container">
 

    <br><br><br>

<div class="container">
  <h2><?php $u_name ?></h2>
  <p><?php $u_description ?></p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Location: <?php echo $u_location ?></th>

      </tr>
    </thead>
    
      <thead>
      <tr>
        <th>No. Students:  <?php echo $u_students ?></th>
 
      </tr>

      <tr>
 
        <th>Website:  <a href = "<?php echo $website ?>"> <?php echo $website ?></a></th>
      </tr>
    </thead>

  </table>
</div>

</body>
</html>