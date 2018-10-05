<?php


include_once 'dbcon.php';

$ROLL = $_POST['roll'];

$TAE1 = $_POST['TAE1'];
$TAE2 = $_POST['TAE2'];
$TAE3 = $_POST['TAE3'];
$TAE4 = $_POST['TAE4'];
$TAE5 = $_POST['TAE5'];
$TAE6 = $_POST['TAE6'];
$TAE7 = $_POST['TAE7'];
$CAE1 = $_POST['CAE1'];
$CAE2 = $_POST['CAE2'];
$CAE3 = $_POST['CAE3'];
$CAE4 = $_POST['CAE4'];
                            


//$hashedPwd = password_hash($password, PASSWORD_DEFAULT);


$sql= "INSERT INTO wt (Roll,TAE1,TAE2,TAE3,TAE4,TAE5,TAE6,TAE7,CAE1,CAE2,CAE3,CAE4) VALUES ('$ROLL','$TAE1','$TAE2','$TAE3','$TAE4','$TAE5','$TAE6','$TAE7','$CAE1','$CAE2','$CAE3','$CAE4')";

if(mysqli_query($dbcon, $sql))

{

  header("Location: http://localhost/RMS/wtmarksentry.php");

}
else
{
   echo "Error: " . $sql . "<br>" . mysqli_error($dbcon);

   header("Location: http://localhost/RMS/wtmarksentry.php");


}



mysqli_close($dbcon);



?>


