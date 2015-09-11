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
//require_once 'RSO.php';
 
//$rso = mysqli_connect($hn, $un, $pw, $db);
 
// Check connection
//if (mysqli_connect_error()) 
//{
   // die("Connection failed: " . mysqli_connect_error());
//}
 
//$query = "SELECT * FROM rso";
//$result = mysqli_query($rso, $query);
 
//<input type="username" class="form-control" name="description" placeholder="Enter username" required>
               //<br>
 
//if(!$result){
    //die("Database query failed");
//}
 
?>

  <link rel="stylesheet" href="events.css">

   
</head>
<body background = "college-background.jpg">
  
 <!-- banner -->
  <div class="jumbotron">
    <div class='col-sm-offset-3'>
      <h1>College Events </h1>
 
      <h2>Create University Profile</h2>
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
     
    <div class="row">
     <!-- form to submit userID and login  -->
   <div class="col-sm-6">
     <!-- form to submit user info and login -->
      <div class="col-sm-offset-7">
      <h3>University Info</h3>
      <br>
       <form id = "universityForm" class="form-horizontal" role="form" action="university.php" method="post">
          <div class="form-group">
      <div class="col-sm-15">
     
              <input type="username" class="form-control" id="uniName" name="uniName" placeholder="Enter University name" required>
               <br>
              <input type="username" class="form-control" id="location"name="location" placeholder="Enter location" required>
                <br>
              <textarea class = "form-control" name="description" id = "description" placeholder="Enter description" rows="4"></textarea>
               <br>
              <input type="username" class="form-control" id="num_stu" name="num_stu" placeholder="Enter number of students" required>
               <br>
               <input type="username" class="form-control" id="link" name="link" placeholder="Enter website" required>
      </div>
              <br>
       <!-- button to log into account -->  
          </div>
           <div class="form-group"> 
            <div class="col-sm-offset-3 col-sm-10">
              <button type="submit" name="submitLog" class="btn btn-default" >Create University</button>
            </div>
         
          </div>
          </form>
          </div>
    </div>
     </div>
    </body>
</html>
 
