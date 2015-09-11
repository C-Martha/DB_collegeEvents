<!DOCTYPE html>
<html lang="en">
<head>
  <title>College Events</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   
 <!--connect to css page-->
  <link rel="stylesheet" type="text/css" href="register.css">
   
<?php
 
//file to connect to database
require_once 'tracker.php';
 
// Create connection
$query = "SELECT university FROM students WHERE username = '$_SESSION[username]'";
$result = mysqli_query($conn, $query);
 
if(!$result){
    die("Database query failed");
}

for($i = 0; $i < 1; $i++)
{
	$row = $result->fetch_array(MYSQLI_ASSOC);
	$visible = "UPDATE rso SET visible = 1 WHERE university = '$row[university]'";
}
$visResult = mysqli_query($conn, $visible);
 
if(!$visResult) {
    die();
    }
 
?>

  <link rel="stylesheet" href="events.css">

   
</head>
<body background = "college-background.jpg">
  
 <!-- banner -->
 
 <div class="jumbotron">
      <div class='col-sm-offset-3'>
      <h1>College Events</h1>
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
    
    <br>
     
    <!-- trying to display query results in table-->
    <div class = "form-group">
    <div class="col-sm-5">
    <h3 style='color: #F28500;'>Join RSO</h3>
    <form id = "joinRsoForm" role = "form" action="joinRSO.php" method = "post">
    <table class="table table-striped" style="width:680px">
    <thead>
    <tr>
    <th>Join</th>
    <th>RSO Name</th>
    <th>Contact Admin</th>
    <th>University</th>
    <th># of Students</th>
    </thead>
    <tbody>
    <?php
        $count = 1;
	$query = "SELECT * FROM rso";
	$result = mysqli_query($conn,$query);
        while($row = mysqli_fetch_assoc($result)) {
         
            if($row['visible'] == 1) {
    ?>
            <tr>
            <td><input type="radio" name="join" value="<?php echo $count ?>"/></td>
            <td><?php echo $row["rso_name"]; ?></td>
            <td><?php echo $row["admin"]; ?></td>
            <td><?php echo $row["university"]; ?></td>
            <td><?php echo $row["num_students"]; ?></td>
            </tr>
    <?php
        }
        $count++;
        }
    ?>
    </tbody>
    </table>
    <div class="form-group"> 
            <div class="col-sm-10">
              <button type="submit" name="submitRadio" class="btn btn-default" >Join</button>
            </div>
                 </div>
            </div>
         </form>
     
     </div>

    <!-- form to submit user info and create account -->
      <div class="col-sm-offset-4 col-sm-2">
         <h3 style='color: #F28500;'>Create RSO</h3>
       <form id = "createRsoForm" class="form-horizontal" role="form" action="createRSO.php" method="post">
          <div class="form-group">
  
     
              <input type="username" class="form-control" name="rso_name" placeholder="Enter RSO name" required>
               <br>
              <input type="username" class="form-control" name="student1" placeholder="Enter Admin" required>
              <br>
              <input type="username" class="form-control" name="student2" placeholder="Enter student 2" required>
              <br>
              <input type="username" class="form-control" name="student3" placeholder="Enter student 3" required>
              <br>
              <input type="username" class="form-control" name="student4" placeholder="Enter student 4" required>
              <br>
              <input type="username" class="form-control" name="student5" placeholder="Enter student 5" required>

              <br>
       <!-- button to create account -->  
          </div>
           <div class="form-group"> 
            <div class="col-sm-offset-3 col-sm-10">
              <button type="submit" name="submitReg" class="btn btn-default" >Create</button>
            </div>
         
          </div>
          </form>
          </div>
     
</body>
</html>
 
<?php
    $conn->close();
?>