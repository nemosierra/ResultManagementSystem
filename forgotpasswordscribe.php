<html>
<head>
<title> Forgot Password </title>
<link rel="stylesheet" type="text/css" href="style.css"> 
    <script>
        function validate()
        {
            var x=document.forms["forgot_pass"]["username"].value;            // variable for username
            var y=document.forms["forgot_pass"]["password"].value;            // variable for pass
            var a=document.forms["forgot_pass"]["confpass"].value;            // variable for confpass
            if(x=="")
            {
                alert("please enter a username");
            }
            else if(y=="")                                                    // validation of proper pass
            {
                alert(" please enter password");
            }
            else if(a=="")                                                    // validation of proper confpass
            {
                alert(" please re-enter a password ");
            }
            else if(!(y==a))                                                  // checking whether both pass matches
            {
                alert(" Both Passwords don't match ");    
            }
            else
            {
                alert("Password Updated");
                window.open = "login.html";                                   // Redirecting to other page.
            }
            
        }
    </script>
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
       float: left;    
       overflow: hidden;
       background-color: black;
       margin: 100px 0px 0px 0px;
       padding:30px 5px 32px 0px;
      }

      .developer
      {
       
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
    <a href="#about">About Us</a>
    <a href="index.php">Home</a>
   </div>
  </header>
  <div class="containerbox">
     <img src="default-avatar.png" class="avatar">
     <h1>Password Update</h1>
     <form action="forgotinfocheck.php" method="POST">
      
         <p>Enter Username </p>
      <input type="text" name="username" placeholder="Enter User Name">
      <p>Enter New Password </p>
      <input type="password" name="password" placeholder="Enter Password">
      <p>Re-Enter New Password </p>
      <input type="password" name="confpass" placeholder="Enter Password">
      <input type="Submit" name="submit" value="Update" onclick="validate()"><br>
      
     </form>

  <footer> 
    <div class="footer">
     <div class="developer">
      @developed By - MNS
     </div>
    </div>
  </footer>
  </div>
</body>
</html>
