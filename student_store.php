<?php


include_once 'dbcon.php';

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$email=$_POST['mail'];
$password=$_POST['pass'];
$class=$_POST['class'];
$dept=$_POST['department'];
$div=$_POST['div'];
$roll=$_POST['roll'];
                            


//$hashedPwd = password_hash($password, PASSWORD_DEFAULT);


$sql= "INSERT INTO student (Roll,fname,lname,dob,gender,username,class,department,division,password) VALUES ('$roll','$fname','$lname','$dob','$gender','$email','$class','$dept','$div','$password')";

if(mysqli_query($dbcon, $sql))

{

  header("Location: http://localhost/RMS/student_signup.php");

}
else
{
   echo "Error: " . $sql . "<br>" . mysqli_error($dbcon);

   header("Location: http://localhost/RMS/student_signup.php");


}



mysqli_close($dbcon);



?>


