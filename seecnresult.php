<!DOCTYPE html>
<html>
    
    <head>
    
        <!--=======Font Open Sans======-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  background-image: url('custombrown.jpg');
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
  padding: 16px 16px;
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


<style> 
            button{
                
        position: absolute;
        top: 430px;
        left :510px;
        box-sizing: border-box;
        cursor: pointer;
        font-size: 18px;
        border-radius: 10px;
        border-bottom-right-radius: 0px;
        border: 1px outset black;
        background: #2196F3;
            }
            img{
                
                position: absolute;
                top: 85px;
                left: 400px;
                size: 50px;
                height: 420px;
                width: 500px;
             
                
                
            }
            .conaboutus{
                padding-top:8px;
                padding-left:100px;
                padding-right:150px;
                padding-bottom:300px;
                height:300px;
                background-image:url(images/custombrown.jpg);
                background-position:center top;
                background-repeat:repeat-y;
                width:100%;
                height:600px;
                color:white;
                background-attachment:scroll;

            }
        
        input{
        
        position: absolute;
        top: 245px;
        left :480px;
                
        
    }
    input[type=text] {
    width: 150px;
    color: black;
    border: 2px outset #ccc;
    border-radius: 25px;
    font-size: 13px;
    background-color: white;
    
    
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 1s ease-in-out;
}

input[type=text]:focus {
    width: 28%;
}
        
        
     .footer 
      {
       overflow: hidden;
       background-color: black;
       margin: 512px 0px 0px 0px;
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
    <a href="studentmain.php">Student</a>
   </div>
  </header>

    <form action="cnresultview.php" method="POST">
    <br>
   
    <img src="studentprofile2.png">
    
    
  <input type="text" id="search" name="cnresultsearch" title="Enter Roll to check result"  placeholder="Enter Roll..">
  <button type="submit" name="submit"><strong><i class="fa fa-search" title="Click Me For Search"> Result</i></strong></button>
</form>
      
 <footer> 
    <div class="footer">
     <div class="developer">
      @developed By - C2
     </div>
    </div>
   </footer>
</body>
</html>

