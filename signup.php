<?php // Example 26-5: signup.php
   
    require_once 'login.php';
    require_once 'tracker.php';
 
  
 
    function destroySession()
   
    {
     
        $_SESSION=array();
 
     
        if (session_id() != "" || isset($_COOKIE[session_name()]))
       
            setcookie(session_name(), '', time()-2592000, '/');
 
     
        session_destroy();
   
    } 
     
 
    echo <<<_END
 
 
 
     
 
   
    <script>
     
        function checkUser(user)
     
        {
       
            if (user.value == '')
       
            {
         
                O('info').innerHTML = ''
         
                return
       
            }
 
       
            params  = "user=" + user.value
       
            request = new ajaxRequest()
       
            request.open("POST", "checkuser.php", true)
       
            request.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
       
            request.setRequestHeader("Content-length", params.length)
       
            request.setRequestHeader("Connection", "close")
 
       
            request.onreadystatechange = function()
       
            {
         
                if (this.readyState == 4)
           
                    if (this.status == 200)
             
                        if (this.responseText != null)
               
                            O('info').innerHTML = this.responseText
       
            }
       
            request.send(params)
     
        }
 
     
        function ajaxRequest()
     
        {
       
            try
            { 
                var request = new XMLHttpRequest() 
            }
       
            catch(e1) 
            {
         
                try
                { 
                    request = new ActiveXObject("Msxml2.XMLHTTP") 
                }
         
                catch(e2) 
                {
           
                    try
                    { 
                        request = new ActiveXObject("Microsoft.XMLHTTP") 
                    }
           
                    catch(e3) 
                    {
             
                        request = false
       
                    } 
                } 
            }
       
            return request
     
        }
   
    </script>
   
     
_END;
 
   
    $error = $user = $pass = "";
   
    if (isset($_SESSION['username'])) 
        destroySession();
 
   
    if (isset($_POST['username']))
   
    {
     
            $user = mysqli_real_escape_string($conn, $_POST['username']); 
                $pass = mysqli_real_escape_string($conn, $_POST['password']);
  $uni = mysqli_real_escape_string($conn, $_POST['uni']);
     
        if ($user == "" || $pass == "")
       
            $error = "Not all fields were entered<br><br>";
     
        else
     
        {
       
            $query = "SELECT * FROM students WHERE username = '$user'";
                $result = $conn->query($query);
 
       
            if ($result->num_rows)
 
            {        
                $error = "That username already exists<br><br>";
 
                }
            else
       
            {
         
                $query = "INSERT INTO students (username,password,university, access) VALUES('$user','$pass', '$uni', 'student')";
                $conn->query($query);                       
                die("<h4>Account created</h4><a href='logReg.html'>Please Log in.</a><br><br>");
       
            }
     
        }
   
    }
 
      
    echo $error
     
     
 
?>
 
      
</body>
 
</html>