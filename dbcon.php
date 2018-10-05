<?php
 $dbServername="localhost";
 $dbUsername="root";
 $dbpassword="";
 $dbName="rgirms";
 
 $dbcon= mysqli_connect($dbServername,$dbUsername,$dbpassword,$dbName);

if (!$dbcon) {
    die("Connection failed: " . mysqli_connect_error());
}
?>