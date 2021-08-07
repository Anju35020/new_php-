
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<table border="1px"  >
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Email</th>
		<th>Contact</th>
		<th>Delete</th>
		<th>Edit</th>
	</tr>
	
	<?php
		$conn=mysqli_connect("localhost","root","","database");

		// $del = $conn->query("DELETE FROM register WHERE ID = 17");
		// if($del){
		// 	echo "<script>DATA DELETED</script>";
		// }else{
		// 	echo "<script>DATA NOT DELETED</script>";
			
		// }

		if(isset($_POST['Delete'])){
			$id = $_POST['id'];
			$del = $conn->query("DELETE FROM register WHERE Id = '$id'");
			if($del){
				// echo "<script>alert ('Data Deleted.')</script>";
			}else{
				// echo "<script>alert ('Data Not Deleted.')</script>";
				
			}
		}


	 
		$fetch = $conn->query('SELECT * FROM register ORDER BY id ASC');
		while($fetchs=mysqli_fetch_array($fetch)){
	?>
	
	<tr>
		<td><?php echo $fetchs['Id'];?></td>
		<td><?php echo $fetchs['name'];?></td>
		<td><?php echo $fetchs['email'];?></td>
		<td><?php echo $fetchs['contact'];?></td>
		<td>
			<form method="post" action="">
				<input type="hidden" name="id" value="<?php echo $fetchs['Id'];?>">
				<input type="submit" name="Delete" value="Detele">
			</form>
		</td>
		<td><a href="update.php?id=<?php echo $fetchs['Id'];?>">Edit</a></td>
		
	</tr>


	<?php
	}
	?>
</table>
</body>
</html>
