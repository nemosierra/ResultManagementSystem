<?php

 if(isset($_POST['submit']))
    {
        
        include_once 'dbh.inc.php';
    
        $uname= mysqli_real_escape_string($conn, $_POST['username']);
        $pwd= mysqli_real_escape_string($conn, $_POST['password']);    //Password
        $cpwd= mysqli_real_escape_string($conn, $_POST['confpass']);    //Confirm Password
        
        
         if(empty($uname) || empty($pwd) || empty($cpwd))
        {
            
         header("Location: ../index.php?login=empty");
        exit();
          
        }
 else {
     
     
     $sql= "UPDATE scribe SET password='$cpwd' WHERE email='$uname'";  
     
     if (mysqli_query($conn, $sql)) {
  
          header("Location: http://localhost/MSHK18/index.php#login");
    
    
} else {
    echo "Error updating record: " . mysqli_error($conn);
}  
     
 }
    }
 mysqli_close($conn);

?>    