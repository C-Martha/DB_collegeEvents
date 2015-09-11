<?php





//file to connect to databse
require_once 'login.php';




  echo "<br>"; 
    $eName = $_POST['name']; 

 $eCategory =  $_POST['category'];
 
    $eDescription =$_POST['description']; 

    $eDate = $_POST['date']; 

$ePhone = $_POST['phone']; 

   $eEmail = $_POST['email'];
  
 $eLati = $_POST['lat']; 

     $eLogn =  $_POST['log'];

    $elName = $_POST['locationName'];

$elAddress = $_POST['locationAddress']; 

  
  
  
  
 //get the result of the event visibility from radio buttons
  if($eView = $_POST['visibility']){
    if($eView == "public"){
      //echo "public"; 
      
    } else if($eView == "private"){
     // echo "private"; 
    } else if($eView == "rso"){
      $eView = $_POST['rsoEvent']; 
    //  echo $eView; 
    }
  }
  
  
  
  //executed if user signs in 
if(isset($_POST['eSubmit']))
{
    
  
        //insert user data into database 
    $sql = "INSERT INTO events (name, category, description, date, phone, email, view)
    VALUES ('{$eName}', '{$eCategory}', '{$eDescription}', '{$eDate}' , '{$ePhone}' , '{$eEmail}' , '{$eView}'  )"; 
    
      if ($conn->query($sql) === TRUE) {
    //   echo "New record created successfully";
    } else {   
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    
    $sql = "INSERT INTO location (name, address, lat, log)
    VALUES ('{$elName}', '{$elAddress}', '{$eLati}', '{$eLogn}' )"; 
 
    if ($conn->query($sql) === TRUE) {
     //  echo "New record created successfully";
    } else {   
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    


}
  
  
//close connection to database
$conn->close();



?>


<!-- HTML output -->
<!DOCTYPE html>
<html lang = 'en'>
<head>
<title>College Events</title>

  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
  <script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="events.css">

  
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

 <!-- get values from event submission-->
<script type="text/javascript">
     var php_Lat = "<?php echo $_POST['lat'];  ?>";
     var php_Long = "<?php echo $_POST['log'];  ?>";
  
var myCenter=new google.maps.LatLng(php_Lat, php_Long);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:5,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);

</script>

  
</head>
<body>
    <!-- banner -->
    <div class='container'>
    <div class='jumbotron'>
      <h1>College Events </h1>
      <p> <nav>
         <a href='rsoPage.php'>RSO Page</a> | 
        <a href='eventsCreate.html'>Create Event</a> | 
        <a href='uniProfile.php'>Create University Profile</a> | 
        <a href='logout.php'>Logout</a> | 
        </nav>
        </p> 
    </div>
    <br><br>
    <!-- output userinfo -->
    
   <body>

<div class="container">
  <h2><?php echo $eName; ?>         </h2>
   <?php echo $eDescription; ?>         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Date </th>
        <th>Category</th>
        <th>View</th>
         <th>Email</th>
        <th>Phone</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $eDate; ?></td>
        <td><?php echo $eCategory; ?></td>
        <td><?php echo $eView; ?></td>
        <td><?php echo $eEmail; ?></td>
          <td><?php echo $ePhone; ?></td>
        
      </tr>
      
    </tbody>
  </table>
</div>


<div id='googleMap' style='width:500px;height:380px;'></div> 

</body>
</html>

