<?php
include 'config.php';

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$contact = $_POST['contact'];
	$id=$_GET['id'];
	// $sql=mysqli_query($conn,"update register set name='$name',email='$email',password='$password', contact='$contact' where id='$id'");
	$sql=$conn->query("UPDATE register SET name='$name', email='$email', password='$password', contact='$contact' WHERE id='$id'");
	if($sql){
		echo "<script>alert('Successfully Updated')</script>";
	}else{
		echo "<script>alert('Data Not Updated')</script>";

	}
}



$id=$_GET['id'];

$query=mysqli_query($conn,"select * from register where id='$id'");
while($row=mysqli_fetch_array($query))
{
	?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="">
	<input type="text" name="name" value="<?php echo $row['name'];?>"><br><br>
	<input type="email" name="email"value="<?php echo $row['email'];?>"><br><br>
	<input type="password" name="password" value="<?php echo $row['password'];?>"><br><br>
	<input type="number" name="contact" value="<?php echo $row['contact'];?>"><br><br>
	<input type="submit" name="submit" value="Update"><br><br>	
</form>
<?php
}
?>
</body>
</html>