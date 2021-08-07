<?php
include 'config.php';
  if(isset($_POST['submit'])){
  	$name = $_POST['name'];
  	$email = $_POST['email'];
  	$password = $_POST['password'];
  	$contact = $_POST['contact'];
  	$ins = $conn->query("INSERT INTO register (name, email, password, contact) VALUES('$name', '$email', '$password', '$contact')");
  	if($ins){
  		echo 'DATA INSERTED';
      header('location:select.php');

  	}else{
  		echo "DATA NOT INSERTED";
  	}

  }

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<form method="post" action="">
    <input type="text" name="name" placeholder="Name" pattern="[A-Z][a-z]+ "><br><br>
    <input type="email" name="email" placeholder="Email" pattern="[a-z0-9.@]+"><br><br>
    <input type="password" name="password" placeholder="Password" pattern="[A-Za-z]{8}" maxlength="5" title="please fill the Alpha, NUMBER, and symbol_,%@! only fill 8 "><br><br> 
    
<!--     <input type="password" name="password" placeholder="Password" pattern="[A-Za-z0-9]" title="use only these symboles #$%Y^&^"><br><br>
 -->    <input type="text" name="contact" placeholder="Contact"><br><br>
    <input type="submit" name="submit" value="SUBMIT">

	<!-- 	<input type="text" name="name" placeholder="Name" pattern="^[A-Z][a-z]+"><br><br>
		<input type="email" name="email" placeholder="Email" pattern="[a-z0-9.@/_-#$]+"><br><br>
		<input type="password" name="password" placeholder="Password" pattern="[A-Za-z]{3}" maxlength="5" title="please fill the Alpha, NUMBER, and symbol_,%@! only fill 8 "><br><br> -->
    <!-- <input type="password" name="password" placeholder="Password" pattern=".{3,}" maxlength="5" title="please fill the Alpha, NUMBER, and symbol_,%@! only fill 8 "><br><br> -->
    
		
	</form>
</body>
</html>



<!-- $_GET
$_POST
$_REQUEST
$_SERVER
$_COOKIES
$_SESSION -->