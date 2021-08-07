<?php 
	session_start();
	// print_r ($_SESSION);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if(isset($_SESSION['username'])){
	echo "username".$_SESSION["username"];
	}
	?>
</body>
</html>