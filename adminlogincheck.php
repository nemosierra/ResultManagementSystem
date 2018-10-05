<?php

include_once 'dbcon.php';


    
      if(isset($_POST['submit']))
    { 
        
        include_once 'dbcon.php';
        $username= mysqli_real_escape_string($dbcon, $_POST['username']);
        $password= mysqli_real_escape_string($dbcon, $_POST['password']);
        
        if(empty($username) || empty($password))
        {
            
         header("Location: ../adminlogin.php?login=empty");
        exit();
          
            
          
        }
        else
        {
            
            $sql= "SELECT * FROM admin WHERE username='$username' and password='$password'";
                $result= mysqli_query($dbcon, $sql);
                
              
                if (mysqli_num_rows($result) >= 1) 
                {
        
                        echo 'Login Successful!!';
                        header("Location: http://localhost/RMS/adminmain.php");
       
                }
                else
                {
                      header("Location: http://localhost/RMS/adminlogin.php");
                }
                             
        }
     
    }
    else
    {
        
        header("Location: http://localhost/RMS/adminlogin.php?login=error");
        exit();
        
    }

    
    ?>