<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
<form method="post" action="">
	<input type="text" name="name" placeholder="Name"><br><br>
	<input type="email" name="email" placeholder="Email"><br><br>
	<input type="password" name="password" placeholder="Password"><br><br>
	<input type="number" name="contact" placeholder="Contact"><br><br>
	<input type="submit" name="submit" value="Register"><br><br>	
	<?php
$con=mysqli_connect("localhost","root","","database");

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$contact = $_POST['contact'];
	$ins=$con->query("insert into register(name,email,password,contact) values ('$name','$email','$password','$contact')");
	if($ins){
		
	echo "Data Inserted";
	}
	else
	{
	echo "Error";
	}
}
?>
<!-- DELETE QUERY -->

<?php
// $del = $con->query("DELETE FROM register WHERE Id = 16");
// if($del){
  // echo ("DATA SUCCESSFULLY DELETED. ");
// }else{
  // echo ("DATA NOT DELETED.");
// }

if(isset($_POST['Delete'])){
	$id = $_POST['id'];
	$del = $con->query("DELETE FROM register WHERE Id = '$id'");
	if($del){
		echo "<script>alert ('DATA DELETED');window.location.href='register.php';</script>";
		// echo "<script> alert ('Deleted'); window.location.href='register.php';</script>";
  
	}else{
	echo "<script>alert ('DATA NOT DELETED');window.location.href='register.php';</script>";	
	}
}
?>

<table border="1px">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Contact</th>
    <th>Delete</th>
    <th>Edit</th>
  </tr>

  <?php
  $row = $con->query('SELECT * FROM register ORDER BY id DESC ');
  while($rows=mysqli_fetch_array($row)){
  ?>



<tr>
  <td><?php echo $rows['Id'];?></td>
  <td><?php echo $rows['name'];?></td>
  <td><?php echo $rows['email'];?></td>
  <td><?php echo $rows['password'];?></td>
  <td><?php echo $rows['contact'];?></td>
  <td>
  	<form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $rows['Id']; ?>"> 
        <input type="submit" name="Delete" value="Delete" class="" style="background-color: transparent; border: 0px;">
    </form>

  </td>

  <td><a href="update1.php?id=<?php echo $rows['Id']?>" >Edit</a></td>
</tr>

<?php
} 
 ?>

</table>
</form>
</body>
</html>




