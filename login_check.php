<?php

include_once 'dbcon.php';


    
      if(isset($_POST['submit']))
    { 
        
        include_once 'dbcon.php';
        $username= mysqli_real_escape_string($conn, $_POST['username']);
        $password= mysqli_real_escape_string($conn, $_POST['password']);
        
        
        
        
        
        if(empty($username) || empty($password))
        {
            
         header("Location: ../index.php?login=empty");
        exit();
          
            
          
        }
        else
        {
            
            $sql= "SELECT * FROM admin WHERE username='$username' and password='$password'";
                $result= mysqli_query($dbcon, $sql);
                
    }
     
    }
    else
    {
        
        header("Location: ../index.php?login=error");
        exit();
        
    }

    
    ?>

