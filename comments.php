<?php
 
    require_once 'login.php'; 
    require_once 'tracker.php';
 
    echo "<!-- HTML output -->";
    echo "<!DOCTYPE html>";
    echo "<html lang = 'en'>";
    echo "<head>";
    echo "<title>College Events</title>";
 
 $username = $_SESSION['username']; 
  
    echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
    echo "<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>";
    echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>";
    echo "<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>";
   echo "<link rel='stylesheet' href='events.css'>"; 
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
       
    $eventname = $_POST['eventname'];
 
    echo "<p><h1> Event: " . $eventname . "</h1></p>";
    
    echo "<br><br>";
    $eventid = $_POST['eventid'];
 
    $query = "SELECT * FROM comments WHERE eID = '$eventid'";
    
    echo "<center>";
    $result = $conn->query($query);
    $num = $result->num_rows;
    for($i = 0; $i < $num; $i++)
    {
	echo " <table class='table table-striped'>";
        $row = $result->fetch_array(MYSQLI_ASSOC);
        $cid = $row['cid'];

 
        echo  $row['comment'];
        echo "<form id= 'lame3' role='form' action='deletecomment.php' method='post'>";

        echo "<input type='hidden' name='commentid' value ='$cid>";
        echo "<input type= 'hidden' name='eventid' value= '$eventid'>";
      
    
        echo "<button type='submit' value='delete' class='btn btn-danger'>Delete</button>";
  
	echo "</form>";

    }
     
  

    echo "<br>";
       echo "<br>";
          echo "<br>";
             echo "<br>";
     

         
    echo "<form id='lame2' role='form' action='addcomment.php' method='post'>";
    echo "<input type= 'hidden' name='eventid' value= '$eventid'>";
             
             echo "<textarea class='form-control' rows='5' name='comment' id='comment' placeholder='Add a comment'></textarea>"; 
             echo "<br>";


    echo "<div class='col-sm-offset-6'>";
     echo "<button type='submit' value='add' class='btn btn-primary'>Submit Comment</button>";
echo "</div>";
   

    echo "</form>";
   echo "</center>";
    
 
    $conn->close();
?> 
  
</body>
</html>






