

<?php include 'page cover.php'; ?>
<html>
<head>
<style>


	
</style>
</head>
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
 
</div>


</center>
<div class="row">

<script>
function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>
<form action="welcome_get.php" method="get" name="myForm" onsubmit="return validateForm()">

<center>
	<h1>Please Fill Up the form </h1>
<h3>
 Name: <input type="text" name="name"><br>
 E-mail: <input type="text" name="email"><br>
 Password : <input type="Number" name="pass" ><br>
 Birthday : <input type="date"  name="birth"><br>
 Gender<br>
 <input type="radio" name="gen" value="Male">Male
 <input type="radio" name="gen" value="Female">Female
 <br>
 <input type="submit" >
 </h3>
 </form>
 </div>
</body>
</html>