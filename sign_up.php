

<?php include 'home cover.php'; ?>
<html>
<head>
<style>


	
</style>
</head>
<body>
	
 

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
</center>
</div>
</body>
</html>