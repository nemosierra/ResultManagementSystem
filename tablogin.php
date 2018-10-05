<!DOCTYPE html>
<html>
    <style>
      * {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  
    overflow: hidden;
  background-color: black;
}
.topnav span {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 16px 20px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a {
  float: right;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  
  color: white;
}

.topnav .login-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:120px;
}

.topnav .login-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background-color: #555;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .login-container button:hover {
  background-color: green;
}

@media screen and (max-width: 600px) {
  .topnav .login-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .login-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

        </style>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
        <!--=======Font Open Sans======-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!--
    
    gypsy icons
    
    -->
            <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	
            <!--StyleSheet-->
	<link rel="stylesheet" href="style1.css">
       
</head>
<body>
    <div class="topnav">
 <span style="font-family: Blackadder ITC;font-size: 25px"><i class="fa fa-handshake-o"></i>  Helping Hand</span>
  
</div>

    <br><br><br><br>
<div class="forms">
	<ul class="tab-group">
		<li class="tab active"><a href="#login">Log In<br><small>(Scribe)</small></a></li>
		<li class="tab"><a href="#signup">Log In<br><small>(Institute)</small></a></li>
	</ul>
          <form action="scribelogincheck.php" id="login" method="POST">
	      <h1>Scribe <i class="fa fa-user" style="font-size:25px"></i></h1>
	      <div class="input-field">
	        <label for="email">Email<span style="color:red"> * </span></label>
                <input type="email" name="email" required="email" placeholder="Email Here..."/>
	        <label for="password">Password<span style="color:red"> * </span></label> 
                <input type="password" name="password" placeholder="Password Here..." required/>
	        <input type="submit" name="submit" value="Login" class="button" onclick="validate()" />
	
                <p class="text-p"> <a href="forgotpasswordscribe.php">Forgot password?</a> </p>
                <p class="text-p"><a href="scribe_signup.php">Don't have an account?</a></p>
       
	      </div>
	  </form>
        
        <!--<div class="loginbox">
        <img src="default-avatar.png" class="avatar">
        
        <form action="scribelogincheck.php" method="POST">
      <p> Username <span style="color:red"> * </span> </p>
      <input id= "userid" type="text" name="username" placeholder="Enter User Name">
      <p> Password <span style="color:red"> * </span> </p>
      <input id="Password" type="password" name="password" placeholder="Enter Password">
      <br><br>
      <input type="Submit" name="submit" value="Login" onclick="validate()"><br>
      <a href="forgotpassword.php"> Forgot Password? </a> <br>
      <a href="scribe_signup.php"> Don't have an account?</a>
     </form>
        
        </div>-->

       
        
        
        <form action="instilogincheck.php" id="signup" method="POST">
	      <h1>Institute <i class="fa fa-institution" style="font-size:25px"></i></h1>
	      <div class="input-field">
	        <label for="email">Email<span style="color:red"> * </span></label>
                <input type="email" name="email" required="email" placeholder="Email Here..."/>
	        <label for="password">Password<span style="color:red"> * </span></label> 
                <font style="color: black"><input type="password" name="password" placeholder="Password Here..." required/></font>
	        <input type="submit" name="submit" value="Login" class="button" onclick="validate()" />
	
                <p class="text-p"> <a href="forgotpasswordinsti.php">Forgot password?</a> </p>
                <p class="text-p"><a href="insti_signup.php">Don't have an account?</a></p>
       
	
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
<script> 

  var attempt = 3;                                                        // Variable to count number of attempts, Below function Executes on 
  function validate()                                                     // click of login button.
  {
   var username = document.getElementById("userid").value;
   var password = document.getElementById("Password").value;
   if ( username == "Admin" && password == "root")
   {
    alert ("Login successfully");
    window.location = "#";                                               // Redirecting to other page.
   }
   else
   {
   attempt --;                                                           // Decrementing by one.
  
   alert("Incorrect Password , You have left "+attempt+" attempt");      // Disabling fields after 3 attempts.
   }
   if( attempt == 0)
   {
    document.getElementById("userid").disabled = true;
    document.getElementById("Password").disabled = true;
    document.getElementById("submit").disabled = true;
    return false;
   }
  }
  </script>

</body>
</html>