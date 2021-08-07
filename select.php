<?php
include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1px">
	<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Contact</th>
    
  </tr>

  <?php
  $row = $conn->query('SELECT * FROM register ORDER BY id DESC ');
  while($rows=mysqli_fetch_array($row)){
  ?>

<tr>
  <td><?php echo $rows['Id'];?></td>
  <td><?php echo $rows['name'];?></td>
  <td><?php echo $rows['email'];?></td>
  <td><?php echo $rows['password'];?></td>
  <td><?php echo $rows['contact'];?></td>
  <td><a href="update.php?id=<?php echo $rows['Id']?>" >Edit</a></td>

  
</tr>

<?php
} 
 ?>

</table>
</body>
</html>