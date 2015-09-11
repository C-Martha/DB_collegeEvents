<?php
   
    //file to connect to databse
    require_once 'login.php';
    require_once 'tracker.php';
   
    //connect to database
    
    
    $username = $_SESSION['username']; 
   
    //close connection to database
    echo "<!-- HTML output -->";
    echo "<!DOCTYPE html>";
    echo "<html lang = 'en'>";
    echo "<head>";
    echo "<title>College Events</title>";
  
   
    echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
    echo "<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>";
    echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>";
    echo "<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>";
     
       echo "<link rel='stylesheet' href='eventsP.css'>"; 
     
     
 $query = "SELECT * FROM location";
    $result = $conn->query($query); 
 $num = $result->num_rows;
 for($j = 0; $j< $num; ++$j)
    {
        
    $row = $result->fetch_array(MYSQLI_ASSOC);
  
   $name = $row['name']; 
    $address = $row['address']; 
    $log = $row['log']; 
  
   $lat =  $row['lat']; 
  
        }
       
  
      echo "<script src = 'http://maps.googleapis.com/maps/api/js'></script>"; 
        
echo "<script type='text/javascript'>"; 
     echo "var php_Lat = '<?php echo $lat;  ?>';";
     echo "var php_Long = '<?php echo $log;  ?>';"; 
  
  /*
 //latitude and logitude for map maker
 echo "var myCenter = new google.maps.LatLng(php_Lat , php_Long);";
  
 echo "function initialize() {";
 echo "var mapProp = {";
   echo "center:myCenter,";
   echo "zoom:5,";
   echo "mapTypeId:google.maps.MapTypeId.ROADMAP";
   echo "};";
  
 echo "var map=new google.maps.Map(document.getElementById('googleMap'), mapProp);";
  
    
    
 echo "var marker=new google.maps.Marker({";
   echo "position:myCenter,";
   echo "});";
  
 echo "marker.setMap(map);";
  
 echo "var infowindow = new google.maps.InfoWindow({";
   echo "content: php_name";
   echo "});";
  
 echo "google.maps.event.addListener(marker, 'click', function() {";
  echo " infowindow.open(map,marker);";
   echo "});";
 echo "}";
  
 echo "google.maps.event.addDomListener(window, 'load', initialize);";
   
 echo "</script>";
     */
     
    echo "</head>";
    echo "<body>";
    echo "<div id='fb-root'></div>";
    echo "<script>";
        echo "(function(d, s, id)";
        echo "{";
            echo "var js, fjs = d.getElementsByTagName(s)[0];";
            echo "if (d.getElementById(id)) ";
                echo "return;";
            echo "js = d.createElement(s); js.id = id;";
            echo "js.src = '//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4';";
            echo "fjs.parentNode.insertBefore(js, fjs);";
        echo "}";
    echo "(document, 'script', 'facebook-jssdk'));";
    echo "</script>";
    echo "<!-- banner -->";
    
    echo "<div class='jumbotron'>";
     echo "<div class='col-sm-offset-2'>";
        echo"<h1>College Events </h1>";
       // echo"<h2>" . $username . "</h2>"; 
       echo "<h4> Your Events, ". $username . "</h4>";
        echo "<p><nav>" .
        "<a href='rsoPage.php'>RSO Page</a> |" .
        "<a href='eventsCreate.html'>Create Event</a> |" .
        "<a href='uniProfile.php'>Create University Profile</a> |" .
        "<a href='logout.php'>Logout</a> |" .
        "</nav> </p>";
        echo "</div>";
       echo "</div>";
       
       
        echo "<div class='container'>";
       
    echo "<!-- output userinfo -->";
      

//query to show public events and events of rso user belongs to
 $query = "SELECT * FROM events WHERE view = 'public'  ";
    $result = $conn->query($query); 
 $num = $result->num_rows;
 for($j = 0; $j< $num; ++$j)
    {
        
    $row = $result->fetch_array(MYSQLI_ASSOC);
  
      
   echo  "<div class='container  col-sm-8 col-md-offset-2'>"; 
 echo    "<h2 style='color: #F28500;'>" . $row['name'] . "</h2>";   
   echo "<p>". $row['description'] . "</p>";        
       
 echo " <table class='table table-striped'>";
    echo "<thead>";
      echo "<tr>";
        echo "<th>Date</th>";
        echo "<th>Category</th>";
        echo "<th>View</th>";
         echo "<th>Email</th>";
        echo "<th>Phone No.</th>";
    echo "<th>Comments</th>";
      echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
      echo "<tr>";
       echo  "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['category'] . "</td>";
        echo "<td>" . $row['view'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
    echo "<form id= 'lame' role='form' action='comments.php' method= 'post'>";
    echo "<input type='hidden' name='eventname' value='$row[name]'>";
    echo "<input type='hidden' name='eventid' value='$row[eID]'>";
    echo "<td><button type='submit' value= 'view comments' class='btn btn-info'>Comment</button></td>";
 
    echo "</form>";
      echo "</tr>";
  
  echo "</tbody>";
  echo "</table>"; 
  
  
//echo "<div id='googleMap' style='width:500px;height:380px;'></div> "; 
  
  
echo "<div class='fb-share-button' data-href='http://localhost/usethis/profile.php' data-layout='button_count'></div>";
  echo "<hr>"; 
echo "</div>";
  
  }
 
 
$username = $_SESSION['username']; 
 
//query to show public events and events of rso user belongs to
 $query = "SELECT * FROM rsoStudents WHERE student_email = '$username'  ";
    $result = $conn->query($query); 
 $num = $result->num_rows;
  $rso='';
 for($j = 0; $j< $num; ++$j)
    {
        
    $row = $result->fetch_array(MYSQLI_ASSOC);
     
   // echo $row['rs_id']; 
   // echo "<br>"; 
   $rso = $row['rso_name']; 
   // echo $rso; 
    
     
    }
     $query = "SELECT * FROM events WHERE view = '$rso'  ";
    $result = $conn->query($query); 
 $num = $result->num_rows;
 for($j = 0; $j< $num; ++$j)
    {
        
    $row = $result->fetch_array(MYSQLI_ASSOC);
 
 
   echo  "<div class='container  col-sm-8 col-md-offset-2'>"; 
 echo     "<h2 style='color: #00CBE7;'>" . $row['name'] . "</h2>";   
   echo "<p>". $row['description'] . "</p>";        
       
 echo " <table class='table table-striped'>";
    echo "<thead>";
      echo "<tr>";
        echo "<th>Date</th>";
        echo "<th>Category</th>";
        echo "<th>View</th>";
         echo "<th>Email</th>";
        echo "<th>Phone No.</th>";
    echo "<th>Comments</th>";
      echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
      echo "<tr>";
       echo  "<td>" . $row['date'] . "</td>";
        echo "<td>" . $row['category'] . "</td>";
        echo "<td>" . $row['view'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['phone'] . "</td>";
    echo "<form id= 'lame' role='form' action='comments.php' method= 'post'>";
    echo "<input type='hidden' name='eventname' value='$row[name]'>";
    echo "<input type='hidden' name='eventid' value='$row[eID]'>";
   echo "<td><button type='submit' value= 'view comments' class='btn btn-info'>Comment</button></td>";
    echo "</form>";
      echo "</tr>";
  
  echo "</tbody>";
  echo "</table>"; 
  
  
echo "<div id='googleMap' style='width:500px;height:380px;'></div> "; 
  
  
echo "<div class='fb-share-button' data-href='http://localhost/usethis/profile.php' data-layout='button_count'></div>";


 

  echo "<hr>"; 
echo "</div>";
  
  }
//echo "<iframe src='maps.php' style='border:none'  width='580' height='300'></iframe>"; 
 
  
   
$conn->close();
?> 
  
  
  
  
  
</body>
</html>