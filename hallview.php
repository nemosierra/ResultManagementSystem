<!DOCTYPE html>
<html>
<head><!--header files are added here-->
<title>Hall Details</title>

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Champion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">

                <!-- Table Style Sheet start -->
<style>
    
    
#institute {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    
}

#institute td,th {
    border: 1px solid #ddd;
    padding: 8px;
    color: black;
}

#institute tr:nth-child(even){background-color: #f2f2f2;}
#institute tr:nth-child(odd){background-color: #f2f2f2;}

#institute tr:hover {background-color: #ddd;}

#institute th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #4CAF50;
    color: white;
}

    
    
    
    </style>
                            <!-- Table Style Sheet End -->





<style>  
.conaboutus{
	padding-top:8px;
	padding-left:100px;
	padding-right:150px;
	padding-bottom:520px;
	height:50px;
	background-image:url(images/custombrown.jpg);
	background-position: center top;
	background-repeat:repeat-y;
	width:100%;
	height:700px;
	color:white;
	background-attachment:scroll;
	
}
navbar navbar-default{
    color:violet;
}
</style>
</head>

<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-nav">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="logo">
						<a class="navbar-brand" href="index.html"><i class="fa fa-star"></i> Seating Arrangement</a>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-5">
					 <ul class="nav navbar-nav">
					
                                                <li class="hvr-sweep-to-bottom"><a href="studentprofile.php" class="scroll"><span class="glyphicon glyphicon-education"></span>&nbsp;&nbsp;Student Profile</a></li>
					  </ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
<!-- //header -->
<div class="conaboutus">
<!--Forms-->
	
  <br><br>
<hr>

<center>

    <table  id="institute" border="2">
<?php
 include('dbh.inc.php');
 if(isset($_POST['submit']))
    { 
      
 $hall= mysqli_real_escape_string($conn, $_POST['hall']);
 
$sql = "SELECT * FROM student where hall='$hall'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
   
    
    echo "<tr>"."<th>"."Student ID" ."</th>"."<th>"."First Name" ."</th>"."<th>"."Last Name" ."</th>"."<th>"."Seat Number" ."</th>"."<th>"."Registration Date" ."</th>"."<th>"."Branch" ."</th>"."<th>"."Year" ."</th>"."<th>"."Semester" ."</th>"."<th>"."Gender" ."</th>"."<th>"."Exam Type" ."</th>"."<th>"."Hall/Block" ."</th>"."<th>"."Desk Number" ."</th>"."</tr>";    
  
    while($row = mysqli_fetch_assoc($result)) {
     
        echo "<tr>"."<td>".$row['student_id']."</td>"."<td>".$row["fname"]."</td>"."<td>".$row["lname"]."</td>"."<td>".$row["seatnumber"]."</td>"."<td>".$row["date"]."</td>"."<td>".$row["branch"]."</td>"."<td>".$row["year"]."</td>"."<td>".$row["sem"]."</td>"."<td>".$row["gender"]."</td>"."<td>".$row["examtype"]."</td>"."<td>".$row["hall"]."</td>"."<td>".$row["desk"]."</td>"."</tr>";
        /*
         echo "<tr>"."<th>"."Student ID : " ."</th>"."</tr>"."<tr>"."<td>".$row["student_id"]."</td>"."</tr>";
           echo "<tr>"."<th>"."First Name : " ."</th>"."</tr>"."<tr>"."<td>".."</td>"."</tr>";
             echo "<tr>"."<th>"."Last Name : " ."</th>"."</tr>"."<tr>"."<td>".."</td>"."</tr>";
               echo "<tr>"."<th>"."Seat Number : " ."</th>"."</tr>"."<tr>"."<td>".$row["seatnumber"]."</td>"."</tr>";
                   echo "<tr>"."<th>"."Registration Date: " ."</th>"."</tr>"."<tr>"."<td>".$row["date"]."</td>"."</tr>";
                     echo "<tr>"."<th>"."Branch : " ."</th>"."<tr>"."</tr>"."<td>".$row["branch"]."</td>"."</tr>";
                        echo "<tr>"."<th>"."Year : " ."</th>"."<tr>"."</tr>"."<td>".$row["year"]."</td>"."</tr>";
                            echo "<tr>"."<th>"."Semester: " ."</th>"."</tr>"."<tr>"."<td>".$row["sem"]."</td>"."</tr>";
                                echo "<tr>"."<th>"."Gender : " ."</th>"."</tr>"."<tr>"."<td>".$row["gender"]."</td>"."</tr>";
                                    echo "<tr>"."<th>"."Exam Type : " ."</th>"."</tr>"."<tr>"."<td>".$row["examtype"]."</td>"."</tr>";
                                        echo "<tr>"."<th>"."Hall / Block : " ."</th>"."</tr>"."<tr>"."<td>".$row["hall"]."</td>"."</tr>";
                                            echo "<tr>"."<th>"."Desk Number : " ."</th>"."</tr>"."<tr>"."<td>".$row["desk"]."</td>"."</tr>";
              */
          
    }  
}
else
{
    
    header("Location : http://localhost/MSHK18/seescribeprofile.php");
    
}
    }
mysqli_close($conn);
?>
    </table>
    </center>





</body>
</html>