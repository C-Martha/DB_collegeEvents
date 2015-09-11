<?php // Example 26-6: checkuser.php
   
 
   
    if (isset($_POST['username']))
   
    {
     
        $user   = sanitizeString($_POST['username']);
     
        $query = "SELECT * FROM student WHERE username='$user'");
            $result = $conn->query($query);
 
     
        if ($result->num_rows)
       
            echo  "<span class='taken'>&nbsp;&#x2718; " .
            "This username is taken</span>";
     
        else
       
            echo "<span class='available'>&nbsp;&#x2714; " .
           "This username is available</span>";
   
    }
 
?>