<!DOCTYPE html>
<html>
<head>
    
        <!--=======Font Open Sans======-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<style>
* {box-sizing: border-box;}
     
.post a	{

padding:50px;
margin-left:90px;
position:absolute;
top:200px;
border:5px solid;
border-radius:5px; 
text-decoration: none;
box-shadow: 5px 10px 8px 10px #888888;
color:black

}

.post a:hover {

background-color: black;
color:white;
}

.post1 a	{

padding:50px;
margin-left:340px;
position:absolute;
top:200px;
border:5px solid;
border-radius:5px; 
text-decoration: none;
box-shadow: 5px 10px 8px 10px #888888;
color:black

}

.post1 a:hover {

background-color: black;
color:white;
}

.post2 a	{

padding:50px;
margin-left:600px;
position:absolute;
top:200px;
border:5px solid;
border-radius:5px; 
text-decoration: none;
box-shadow: 5px 10px 8px 10px #888888;
color:black

}

.post2 a:hover {

background-color: black;
color:white;
}


.post-right a{

padding:50px;
margin-left:830px;
position:absolute;
top:200px;
border:5px solid;
border-radius:5px;
box-shadow: 5px 10px 8px 10px #888888;
text-decoration: none;
color:black

}
.post-right a:hover {
background-color: black;
color:white;
}

.post-left a{

padding:50px;
margin-left:1070px;
position:absolute;
top:200px;
border:5px solid;
border-radius:5px;
box-shadow: 5px 10px 8px 10px #888888; 
text-decoration: none;
color:black;
 }
.post-left a:hover {
background-color: black;
color:white;
}

        </style>
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url(1.jpeg) repeat fixed ;
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
      .footer 
      {
       overflow: hidden;
       background-color: black;
       margin: 450px 0px 0px 0px;
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

        <div class="post">
            <a href="seewtresult.php"><b>WT</b></a>
        </div>
        <div class="post1">
            <a href="seedbmsresult.php"><b>DBMS</b></a>
        </div>
        <div class="post2">
            <a href="seetocresult.php"><b>TOC</b></a>
        </div>
        <div class="post-right">
            <a href="seesepmresult.php"><b>SEPM</b></a>
        </div>
        <div class="post-left">
            <a href="seecnresult.php"><b>CN</b> </a>
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

