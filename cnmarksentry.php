<html>
<head>
<title> Marks Entry </title>
    <link rel="stylesheet" type="text/css" href="registeration.css"> 
    <script>
        function validate()
        {
            var a=document.forms["f1"]["subject"].value;                          
            var b=document.forms["f1"]["roll"].value;                          
            var c=document.forms["f1"]["TAE1"].value;                             
            var d=document.forms["f1"]["TAE2"].value;                                       
            var e=document.forms["f1"]["TAE3"].value;                                    
            var f=document.forms["f1"]["TAE4"].value;                            
            var g=document.forms["f1"]["TAE5"].value;                        
            var h=document.forms["f1"]["TAE6"].value;                         
            var i=document.forms["f1"]["TAE7"].value;                                      
            var j=document.forms["f1"]["CAE1"].value;
            var k=document.forms["f1"]["CAE2"].value;                            
            var l=document.forms["f1"]["CAE3"].value;
            var m=document.forms["f1"]["CAE4"].value;//variable for roll
            if((a=="")||(!isNaN(a)))                                              
            {
                alert(" Please enter a proper Subject Name ");
            }
            else if((b=="")||(!isNaN(b)))                                       r
            {
                alert(" Please enter a proper Roll ");
            }
            else if(((c=="")&&((c<0) && (c>4)))                                      
            {
                alert(" TAE should be within 0 to 4");
            }
            else if((d=="")&&((d<0) && (d>4)))                                  
            {
                alert(" TAE should be within 0 to 4");
            }
            else if((e=="")&&((e<0) && (e>4)))                                  
            {
                alert(" TAE should be within 0 to 4");
            }
            else if(((f=="")&&((f<0) && (f>4)))                                 
            {
                alert(" TAE should be within 0 to 4");
            }
            else if((c=="")&&((g<0) && (g>4)))                                                        // validation of proper TAE
            {
                alert(" TAE should be within 0 to 4");
            }
            else if(((h=="")&&((h<0) && (h>4)))                                                        // validation of proper TAE
            {
                alert(" TAE should be within 0 to 4");
            }
            else if(((i=="")&&((i<0) && (i>4)))                                                        // validation of proper TAE
            {
                alert(" TAE should be within 0 to 4");
            }
            else if(((j=="")&&((j<0) && (j>20)))                                                        // validation of proper CAE
            {
                alert(" CAE should be within 0 to 20");
            }
            else if(((k=="")&&((k<0) && (k>20)))                                                        // validation of proper CAE
            {
                alert(" CAE should be within 0 to 20");
            }
            else if(((l=="")&&((l<0) && (l>20)))                                                        // validation of proper CAE
            {
                alert(" CAE should be within 0 to 20");
            }
            else if(((m=="")&&((j<0) && (m>20)))                                                        // validation of proper CAE
            {
                alert(" CAE should be within 0 to 20");
            }
            else
            {
                alert("Registration Completed!!");
                
            }
            
        }
    </script>
    <style>
     .containerbox
     {
      width:450px;
      top:105%;
      height:1150px;
     }
     .avatar
     {
      width:100px;
      height: 100px;
      border-radius: 60%;
      position: absolute;
      top: -4.5%;
      left: +39.5%;
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
       margin: 1400px 0px 0px 0px;
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
    <a href="selectsubject.php">Another Subject</a>
    <a href="teachermain.php">Teacher</a>
   </div>
  </header>
  <div class="containerbox">
     <img src="default-avatar.png" class="avatar">
     <h1> Marks Entry </h1>
     
     <form name="f1" action="cn_marks_store.php" method="POST" >
     
      
      <p> Roll <span style="color:red"> * </span>  </p>
      <input id="name" type="text" name="roll" placeholder="Enter Last Name" autocomplete="off"><br> <br>
      <p> TAE1 <span style="color:red"> * </span> </p>
      <input  type="text" name="TAE1" placeholder="Enter Marks" > <br><br>
      <p> TAE2 <span style="color:red"> * </span> </p>
      <input type="text" name="TAE2" placeholder="Enter Marks"><br> <br>
      
      <p> TAE3 <span style="color:red"> * </span> </p>
      <input type="text" name="TAE3" placeholder="Enter Marks"  autocomplete="off"> <br> <br>
      <p> TAE4 <span style="color:red"> * </span> </p>
      <input id="pwd" type="text" name="TAE4" placeholder="Enter Marks" autocomplete="off"> <br> <br>
      <p> TAE5 <span style="color:red"> * </span> </p>
      <input id="pwdconf" type="text" name="TAE5" placeholder="Enter Marks" autocomplete="off"><br> <br>
      <p> TAE6 <span style="color:red"> * </span> </p> <br> 
      <input id="name" type="text" name="TAE6" placeholder="Enter Marks" autocomplete="off"><br> <br>
      <p> TAE7 <span style="color:red"> * </span>  </p>
      <input id="name" type="text" name="TAE7" placeholder="Enter Marks" autocomplete="off"><br> <br>
      
      <p> CAE1 <span style="color:red"> * </span>  </p>
      <input id="name" type="text" name="CAE1" placeholder="Enter Marks" autocomplete="off"><br> <br>
      
      <p> CAE2 <span style="color:red"> * </span>  </p>
      <input id="num" type="text" name="CAE2" placeholder="Enter Marks" autocomplete="off">
      <p> CAE3 <span style="color:red"> * </span>  </p>
      <input id="name" type="text" name="CAE3" placeholder="Enter Marks" autocomplete="off"><br> <br>
      
      <p> CAE4 <span style="color:red"> * </span>  </p>
      <input id="num" type="text" name="CAE4" placeholder="Enter Marks" autocomplete="off">
      
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
