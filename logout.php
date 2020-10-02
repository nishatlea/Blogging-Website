<?php
   session_start();
?>
<?php
 echo "<h1>". $_SESSION["use"] .", you have logged out</h1>" ;
 setcookie('x', "user", time() - 60);
 setcookie('y', "p", time() - 60);
 unset($_SESSION["use"]);
   session_destroy();
  // header("Location:ksp testing.php"); 
?>
<html>
<body>
<a href= "ksp testing.php" > <h1>HOME </h1> </a><br>
<a href= "log in.php" > <h1>LOG IN </h1> </a><br>
</body>
</html>

