
<?php include 'page cover.php'; ?>
<?php
session_start();
?>
<html>
<style type="text/css">
	input[type=text], input[type=password] {
  width: 100%;
  height:200px;
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
  width: 80%;
}


</style>

<body>
	<div class="header">
<div class="dropdown">
 <span> <h1>কুয়েট সাহিত্য পরিষদ</h1></span>
<div class="dropdown-content">
<p>কুয়েটিয়ানদের পক্ষ থেকে আপনাকে স্বাগতম </p>
</div>
</div>
</div>
<div class="topnav">
  <a href="ksp testing.php">হোম পেজ</a>
  <a href="logout.php" >লগ আউট </a>
  


</div>

<div class="row">
  
<?php
if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.<br>";
} else {
    echo "Cookies are disabled.<br>";
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ksp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset( $conn, 'utf8');
$x= $_SESSION["use"];
  
$sql = "SELECT id, username, birthday,gender,email,reg_date FROM registration where username='$x'";
$result = mysqli_query($conn, $sql);
  echo "<center> <h3>আমার প্রোফাইল </h3><br>";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<h2>id: " . $row["id"]. " <br> Name: " . $row["username"]. "<br> Gender :" . $row["gender"]. "<br> Email:".$row["email"]."<br> Birth: ".$row["birthday"]."<br>registration Date: ".$row["reg_date"]."</h2><br>";
    }
} else {
    echo "0 results";
}
echo"</center>";
$y= $_SESSION["uid"];
?>

<center>
	<script>
function validateForm() {
  var x = document.forms["uform"]["wrt"].value;
  if (x == "") {
    alert("Writing Type must be filled out");
    return false;
  }
}
</script>
<form action="insert.php" name="uform"  method="get" name="myForm" onsubmit="return validateForm()">
<label for="pst"><b><h2>লিখা পোস্ট করুন</h2></b></label>

<textarea  name = "pst"
                  rows = "20"
                  cols = "184">এখানে লিখুন 
              </textarea>
<br>
Writing Type<br>
<input type="radio" name="wrt" value="golpo">গল্প 
<input type="radio" name="wrt" value="kobita">কবিতা
<input type="radio" name="wrt" value="rommo">রম্য রচনা 
<br>
<button type="submit" name="submit">সাবমিট</button>
</form>
<br> 
</center> 

<center>
		
<?php

$pql = "SELECT golpo FROM writings where id='$y'";
$res = mysqli_query($conn, $pql);
echo "<h3><u>গল্প </u></h3><br>";
if (mysqli_num_rows($res) > 0) {
    // output data of each row
    if($pql==true)
    {
    while($row = mysqli_fetch_assoc($res)) {
    	//$str=$row["golpo"] ;
   echo $row["golpo"]."<br>" ;
      
}
}
}
$kql = "SELECT kobita FROM writings where id='$y'";
$kes = mysqli_query($conn, $kql);
echo "<h3><u>কবিতা </u> </h3><br>";
if (mysqli_num_rows($kes) > 0) {
    // output data of each row
    if($kql==true)
    {
    while($row = mysqli_fetch_assoc($kes)) {
      //$str=$row["golpo"] ;
   echo $row["kobita"]."<br>" ;
      
}
}
}
$rql = "SELECT rommo FROM writings where id='$y'";
$rres = mysqli_query($conn, $rql);
echo "<h3><u> রম্য </u> </h3><br>";
if (mysqli_num_rows($rres) > 0) {
    // output data of each row
    if($rql==true)
    {
    while($row = mysqli_fetch_assoc($rres)) {
      //$str=$row["golpo"] ;
   echo $row["rommo"]."<br>" ;
      
}
}
}



mysqli_close($conn);
?>
</center>
</div>


</body>
</html>