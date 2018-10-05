<?php

include_once 'dbcon.php';


    
    if(isset($_POST['submit']))
    { 
        
        include_once 'dbcon.php';
        $username= mysqli_real_escape_string($dbcon, $_POST['email']);
        $password= mysqli_real_escape_string($dbcon, $_POST['password']);
        
        if(empty($username) || empty($password))
        {
            
         header("Location: ../index.php?login=empty");
         exit();
          
            
          
        }
        else
        {
            
            $sql= "SELECT * FROM student WHERE username='$username' and password='$password'";
                $result= mysqli_query($dbcon, $sql);
                
               
                if (mysqli_num_rows($result) == 1) 
                {
        
                        echo 'Login Successful!!';
                        header("Location: http://localhost/RMS/studentmain.php");
       
                }
                else
                {
                      header("Location: http://localhost/RMS/index.php");
                }
                             
        }
     
    }
    else
    {
        
        header("Location: http://localhost/RMS/index.php?login=error");
        exit();
        
    }

    
    ?>