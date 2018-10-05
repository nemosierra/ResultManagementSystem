<html>
<head>
<title> Student Signup Page </title>
    <link rel="stylesheet" type="text/css" href="registeration.css"> 
    <script>
        function validate()
        {
            var x=document.forms["f1"]["fname"].value;                            // variable for fname
            var x1=document.forms["f1"]["lname"].value;                           // variable for lname
            var y=document.forms["f1"]["mail"].value;                             //variable for email
            var atpos = y.indexOf("@")  ;                                         //variable for index no. of ' @ ' in email
            var dotpos = y.indexOf("."); ;                                        //variable for index no. of ' . ' in email
            var z=document.forms["f1"]["pass"].value;                             //variable for pass
            var z1=document.forms["f1"]["confpass"].value;                        //variable for cofpass 
            var claas=document.forms["f1"]["clas"].value;                         //variable for class
            var divi=document.forms["f1"]["div"].value;                           //variable for division            
            var rlno=document.forms["f1"]["roll"].value;                          //variable for roll
            if((x=="")||(!isNaN(x)))                                              // checking for fname to be char
            {
                alert(" Please enter a proper First Name ");
            }
            else if((x1=="")||(!isNaN(x1)))                                       // checking for lname to be char
            {
                alert(" Please enter a proper Last Name ");
            }
            else if ((y=="")||(atpos < 1) || ((dotpos - atpos) < 2 ))             // validation of proper mail
            {
                alert("Please Enter proper Email ID");
            } 
            else if(z=="")                                                        // validation of proper pass
            {
                alert(" please enter password");
            }
            else if(z.length<8)                                                        // validation of proper pass
            {
                alert(" Password should have minimum 8 characters");
            }
            else if(z1=="")                                                       // validation of proper confpass
            {
                alert(" please re-enter a password ");
            }
            else if(!(z==z1))                                                     // checking whether both pass matches
            {
                alert(" Both Passwords don't match ");    
            }
            else if((claas=="")||(!isNaN(claas)))                                 // validation of proper class
            {                                    
                alert(" Please Enter Proper Class"); 
            }
            else if((divi=="")||(!isNaN(divi)))                                   // validation of proper division
            {
                alert(" Please Enter Proper Division");
            }
            else if((rlno=="")||(isNaN(rlno)))                                    // validation of proper address
            {
                alert(" Please Enter Proper Roll Number");
            }
            else
            {
                alert("Registration Completed!!");
                window.open = "login.html";                                        // Redirecting to other page.
            }
            
        }
    </script>
    <style>
     .containerbox
     {
      width:450px;
      top:105%;
      height:1050px;
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
       margin: 1300px 0px 0px 0px;
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
    <a href="adminmain.php">Admin</a>
    <a href="index.php">Home</a>
   </div>
  </header>
  <div class="containerbox">
     <img src="default-avatar.png" class="avatar">
     <h1> Student Registration </h1>
     
     <form name="f1" action="student_store.php" method="POST" >
     
      <p> First Name <span style="color:red"> * </span> </p>
      <input id="name" type="text" name="fname" placeholder="Enter First Name"  autocomplete="off"><span id="Name"></span>
      <br><br>
      <p> Last Name <span style="color:red"> * </span>  </p>
      <input id="name" type="text" name="lname" placeholder="Enter Last Name" autocomplete="off"><br> <br>
      <p> Date of Birth <span style="color:red"> * </span> </p>
      <input  type="Date" name="dob" > <br><br>
      <p> Gender <span style="color:red"> * </span> </p>
      <input type="radio" name="gender" value="Male"> Male
      <input type="radio" name="gender" value="Female" checked> Female<br> <br>
      
      <p> Email <span style="color:red"> * </span> </p>
      <input type="text" name="mail" placeholder="Enter Email"  autocomplete="off"> <br> <br>
      <p> Password <span style="color:red"> * </span> </p>
      <input id="pwd" type="password" name="pass" placeholder="Enter Password" autocomplete="off"> <br> <br>
      <p> Re-enter Password <span style="color:red"> * </span> </p>
      <input id="pwdconf" type="password" name="confpass" placeholder="Re-Enter Password" autocomplete="off"><br> <br>
      <p> Department <span style="color:red"> * </span> </p> <br> 
      <select name="department">
       <option value="CS">Computer Engineering</option>
       <option value="E&TC">Electronics & Telecommunications</option>
       <option value="IT">Information Technology</option>
       <option value="ME">Mechanical Engineering</option>
       <option value="CE">Civil Engineering</option>
      </select> <br><br>
      <p> Class <span style="color:red"> * </span>  </p>
      <input id="name" type="text" name="class" placeholder="Enter Class" autocomplete="off"><br> <br>
      
      <p> Division <span style="color:red"> * </span>  </p>
      <input id="name" type="text" name="div" placeholder="Enter Division" autocomplete="off"><br> <br>
      
      <p> Roll No. <span style="color:red"> * </span>  </p>
      <input id="num" type="text" name="roll" placeholder="Enter Roll no" autocomplete="off">
      
      <br><br>
      <input type="submit" name="submit" value="Register" onclick="validate()"><br><br>
      <!--<a href="index.php"> Already have an account! </a> <br>
      -->
     </form>
  </div>
  <footer> 
    <div class="footer">
     <div class="developer">
      @developed By - C2
     </div>
  </div>
  </footer>
</body>
</html>
