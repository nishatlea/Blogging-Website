<?php  session_start(); ?>
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

$user = $_GET["uname"];
     $pass = $_GET["psw"];
     $_SESSION["use"]=$user;
     $_SESSION["p"]=$pass;

$sql = "SELECT username,id,password FROM registration where username='$user' and password='$pass' ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) >0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $pp=  $row["id"];
        $_SESSION["uid"]=$pp;
    }

    }

if (mysqli_num_rows($result) ==1) {

    
    if(!empty($_GET["remember"])) {
       
	setcookie ("x",$_GET["uname"],time()+60);
	setcookie ("y",$_GET["psw"],time()+60);
	echo "Cookies Set Successfuly";
	
} 
else {
	setcookie("uname","");
	setcookie("psw","");
	echo "Cookies Not Set";
}

echo "<script> window.location.assign('http://localhost/newproject/user_page.php'); </script>";
    
    }
 else {
    echo "<script> window.location.assign('http://localhost/newproject/action_page.php'); </script>";
}

mysqli_close($conn);

//echo $user;
//echo $pass;
/*$password_hash = md5($pass);
if(!empty($user) && !empty($pass))
{ $query_run = mysqli_query($conn,"select id from registration where username='$user' and password='$password_hash'");
  $query_num_rows = mysqli_num_rows($query_run);
if($query_num_rows ==0)
{ echo "<script> window.location.assign('http://localhost/newproject/action_page.php'); </script>";
}
else if($query_num_rows==1)
{
  
  echo "success" ;
//if($_GET["uname"]=="abc" && $_GET["psw"]==1234)
//{
     
/*if(!empty($_GET["remember"])) {
       
	setcookie ("x",$_GET["uname"],time()+60);
	setcookie ("y",$_GET["psw"],time()+60);
	echo "Cookies Set Successfuly";
} else {
	setcookie("uname","");
	setcookie("psw","");
	echo "Cookies Not Set";
}

echo "<script> window.location.assign('http://localhost/newproject/user_page.php'); </script>";

}
}
*/

//else
//{
 
//echo "<script> window.location.assign('http://localhost/newproject/action_page.php'); </script>";
//}

?>
