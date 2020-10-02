<?php include 'page cover.php'; ?>
<?php
session_start();
?>
<html>
<style type="text/css">
	
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
  <a href="user_page.php" >পূর্বের পৃষ্ঠা  </a>


</div>

<div class="row">
<?php
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
$y= $_SESSION["uid"];
$a=$_GET["pst"];
$b=$_GET["wrt"];
$p=null;
$q=null;
$r=null;
if($b=="golpo")
	{ $p=$a;}
else if($b=="kobita")
	{$q=$a;}
else if($b=="rommo")
	{ $r=$a ;}
$sql = "INSERT INTO writings (id, golpo , kobita , rommo ) VALUES ('$y', '$p', '$q','$r')";

if (mysqli_query($conn, $sql)) {
    echo "আপনার লিখা গ্রহণ করা হয়েছে ";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
</div>
</body>
</html>