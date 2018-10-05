<?php


include_once 'dbcon.php';

$tchrid=$_POST['teacherid'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$email=$_POST['mail'];
$password=$_POST['pass'];
$cont=$_POST['contact'];
$dept=$_POST['department'];
                            

echo 
//$hashedPwd = password_hash($password, PASSWORD_DEFAULT);


$sql= "INSERT INTO teacher (teacherid,fname,lname,dob,gender,department,username,pasword,contact) VALUES ('$tchrid','$fname','$lname','$dob','$gender','$dept','$email','$password','$cont')";

if(mysqli_query($dbcon, $sql))
{

  header("Location: http://localhost/RMS/teacher_signup.php");

}
else
{
   echo "Error: " . $sql . "<br>" . mysqli_error($dbcon);

   header("Location: http://localhost/RMS/teacher_signup.php");


}



mysqli_close($dbcon);



?>



