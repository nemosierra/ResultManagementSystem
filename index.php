<html>
<head>
<title> RMS </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
        <!--=======Font Open Sans======-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--
    
    gypsy icons
    
    -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	
            <!--StyleSheet-->
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="style.css">
    <style>
     .topnav
     {
      overflow: hidden;
      background-color: black;
     }
     .topnav span 
     {
      float: left;
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
     }

     .topnav a
      {
       float: right;
       display: block;
       color: white;
       text-align: center;
       padding: 14px 16px;
       text-decoration: none;
       font-size: 17px;
      }

      .topnav a:hover
      {
       background-color: #ddd;
       color: black;
      }
      .footer 
      {
       overflow: hidden;
       background-color: black;
       margin: 20px 0px 0px 0px;
       padding:30px 5px 32px 5px;
      }

      .developer
      {
       float: center;
       display: block;
       color: white;
       text-align: center;
       padding: 14px 16px;
       text-decoration: none;
       font-size: 17px; 
      }

    </style>

</head>
<body>
 
  <header>
   <div class="topnav">
    <span>RGI RMS</span>
    
    
    <a href="index.php">Home</a>
    <a href="adminlogin.php">Admin Login</a>
   </div>
  </header>
  

    <br><br><br><br>
<div class="forms">
	<ul class="tab-group">
		<li class="tab active"><a href="#login">Log In<br><small>(Teacher)</small></a></li>
		<li class="tab"><a href="#signup">Log In<br><small>(Student)</small></a></li>
	</ul>
    <form action="teacherlogincheck.php" id="login" method="POST">
	      
        <h1> Teacher <i class="fa fa-institution" style="font-size:25px"></i></h1>
	      <div class="input-field">
	        <label for="email">Email<span style="color:red"> * </span></label>
                <input type="email" name="email" required="email" placeholder="Email Here..."/>
	        <label for="password">Password<span style="color:red"> * </span></label> 
                <input type="password" name="password" placeholder="Password Here..." required/>
	        <input type="submit" name="submit" value="Login" class="button" />
	
                <p class="text-p"> <a href="forgotpasswordscribe.php">Forgot password?</a> </p>
                <!-- <p class="text-p"><a href="teacher_signup.php">Don't have an account?</a></p>
        -->
	      </div>
	  </form>
        
       
       
        
        
    <form action="studentlogincheck.php" id="signup" method="POST">
	      <h1> Student <i class="fa fa-user" style="font-size:25px"></i></h1>
	      <div class="input-field">
	        <label for="email">Email<span style="color:red"> * </span></label>
                <input type="email" name="email" required="email" placeholder="Email Here..."/>
	        <label for="password">Password<span style="color:red"> * </span></label> 
                <font style="color: black"><input type="password" name="password" placeholder="Password Here..." required/></font>
	        <input type="submit" name="submit" value="Login" class="button" />
	
                <p class="text-p"> <a href="forgotpasswordinsti.php">Forgot password?</a> </p>
             <!--   <p class="text-p"><a href="student_signup.php">Don't have an account?</a></p>
       -->
	
	      </div>
    </form>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script type="text/javascript">
$(document).ready(function(){
	  $('.tab a').on('click', function (e) {
	  e.preventDefault();
	  
	  $(this).parent().addClass('active');
	  $(this).parent().siblings().removeClass('active');
	  
	  var href = $(this).attr('href');
	  $('.forms > form').hide();
	  $(href).fadeIn(500);
	});
});
</script>

  <footer> 
    <div class="footer">
     <div class="developer">
      @developed By - C2
     </div>
  </div>
  </footer>
</body>
</html>
