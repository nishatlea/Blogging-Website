<!DOCTYPE html>
<html lang="en">
<head>
<title>Kuet Sahitto Porishod</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
background-image: url("back5.jpg");


}


/* Style the header */
.header {
  background-image: url("back6.jpg");
  background-repeat: repeat-x;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}

/* Left and right column */
.column.side {
  width: 25%;
}

/* Middle column */
.column.middle {
  width: 50%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
  height: 800px;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */

p.dotted{border-style: dotted;}
#para1
{
 margin-top: 20px;
  margin-bottom: 20px;
  margin-right: 20px;
  margin-left: 20px;
}
.center {
  margin: 0px;
  border: 3px solid #73AD21;
 border-radius: 25px;
  padding: 10px;
}
p.normal {
  font-style: normal;
color: rgb(165,42,42);
}
span.a {
  display: inline; /* the default for span */
  width: 100px;
  height: 100px;
  padding: 5px;
  border: 1px solid blue;  
  background-color: yellow; 
}
.footer {
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
text-color: blue;
}
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;
      width:50%;
      }

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4169E1;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #7C9C92;
}

.imgcontainer {
  text-align: left;
  margin: 30px;
}

img.avatar {
  width: 10%;
  border-radius: 10%;
}

.container {
  padding: 16px;
  width:100% ;
  magin:30px ;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<div class="header">
<div class="dropdown">
 <span> <h1>কুয়েট সাহিত্য পরিষদ</h1></span>

</div>
</div>
<div class="topnav">
  <a href="ksp testing.php">হোম পেজ</a>
  
  


</div>

<div class="row">
  <center>
  <h2>Login Form</h2>

<form action="new_page.php" method="get">
  <div class="imgcontainer">
   <center> <img src="back7.jpg" alt="Avatar" class="avatar"></center>
  </div>
<?php 
 session_start();
 ?>
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname"  value="<?php if(isset($_COOKIE["x"])) { echo $_COOKIE["x"]; } ?>" class="input-field" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw"  value="<?php if(isset($_COOKIE["y"])) { echo $_COOKIE["y"]; } ?>" class="input-field" required>
        
    <button type="submit" name="login">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
</form>
</center>

</div>
<div class="footer">
  <p>created by nishat@1607009</p>
</div>
  
</body>
</html>
