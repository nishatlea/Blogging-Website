<?php include 'page cover.php'; ?>
<html>
<style type="text/css"></style>
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
$sql = "SELECT kobita FROM writings order by wrt_time";
$result = mysqli_query($conn, $sql);
echo "<center><h1>কবিতা </h1></center>" ;
$x=1;
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    
    while($row = mysqli_fetch_assoc($result)) {
    	if($row["kobita"]!=null)
       { echo  "<center>*******************************<br>" .$x.".".$row["kobita"]."</center><br>"; 
   $x=$x+1;
}

    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</body>
</html>