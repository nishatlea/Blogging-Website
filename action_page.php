<?php 
 session_start();
 ?>
<html>
<body>
<?php
 echo "<h1>Dear  ". $_SESSION["use"]."<br></h1>" ; 
 echo "<h1> Sorry, The password is incorrect </h1><br>" ;
?>
<a href ="http://localhost/newproject/log%20in.php" ><h2> Try again </h2> </a><br>
<a href ="http://localhost/newproject/ksp%20testing.php"><h2> Home </h2> </a>


</body>
</html>