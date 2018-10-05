<html>
<head>
<title> Login Page </title>
    <link rel="stylesheet" type="text/css" href="style.css"> 
 <script> 

  var attempt = 3;                                                        // Variable to count number of attempts, Below function Executes on 
  function validate()                                                     // click of login button.
  {
   var username = document.getElementById("userid").value;
   var password = document.getElementById("Password").value;
   if ( username === "Admin" && password == "Admin123")
   {
    alert ("Login successfully");
    window.location = "#";                                               // Redirecting to other page.
   }
   else
   {
   attempt --;                                                           // Decrementing by one.
  
   alert("Incorrect Password , You have left "+attempt+" attempt");      // Disabling fields after 3 attempts.
   }
   if( attempt === 0)
   {
    document.getElementById("userid").disabled = true;
    document.getElementById("Password").disabled = true;
    document.getElementById("submit").disabled = true;
    return false;
   }
  }
  
  </script>
  <style>
     .containerbox
     {
      width:340px;
      top:55%;
      left: 50%;
      height:370px;
      padding: 80px;
     }
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
       margin: 110px 0px 0px 0px;
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
    <a href="index.php" >Logout</a>
    
    <a href="index.php">Home</a>
   </div>
  </header>
  <div class="containerbox">
     <img src="default-avatar.png" class="avatar">
     <h1>Login</h1>
     <form action="adminlogincheck.php" method="POST">
      <p> Username </p>
      <input type="text" id="userid" name="username" placeholder="Enter User Name" required>
      <p> Password </p>
      <input id="Password" type="Password" name="password" placeholder="Enter Password" required>
      <br><br>
      <input type="submit" name="submit" value="Login" onclick="validate()"><br>
     
     </form>
  

  </div>
</body>
</html>
