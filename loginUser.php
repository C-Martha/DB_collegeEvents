<?php
  
//file to connect to database
require_once 'tracker.php';
  
  
//variables to hold user input
$error = "";
 
    echo "<!-- HTML output -->";
    echo "<html>";
    echo "<body>";
 
 
if (isset($_POST['username']))
{
    $user_name = mysqli_real_escape_string($conn, $_POST['username']); 
    $user_pw = mysqli_real_escape_string($conn, $_POST['password']);
    if($user_name == "" || $user_pw == "")
        $error = "Not all fields were entered<br>";
    else
    {
        $query = "SELECT username,password FROM students WHERE username = '$user_name' AND password = '$user_pw'";
        $result = $conn->query($query);
        if($result->num_rows == 0)
        {
            $error = "<span class='error'>Username/Password invalid</span><br><br>";
 
        }
        else
        {
            $_SESSION['username'] = $user_name;
            $_SESSION['password'] = $user_pw;
            die("You are now logged in. Please <a href='profile.php'> click here</a> to continue.<br>");
		
        }
    }
} 
  
echo $error;
echo "<a href='logReg.html'>Retry</a>";
 
$conn->close();
  
?>
 
</body>
</html>