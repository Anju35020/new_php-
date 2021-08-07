<!DOCTYPE html>
<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
  Select image to upload:<br>
  <input type="file" name="file"><br><br>
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>

<?php
if (isset($_POST['submit'])){
	// echo "file is uploaded.";

	$file = $_FILES['file'];
	// print_r($file);
	$file_name = $_FILES['file']['name']; 
	$file_type = $_FILES['file']['type']; 
	$file_size = $_FILES['file']['size']; 
	$file_temp_loc = $_FILES['file']['tmp_name']; 
	$file_store = "img/" .$file_name;

	if(move_uploaded_file($file_temp_loc, $file_store)){
			echo "<script>alert ('FILE UPLOADED');</script>";
	}else{
			echo "<script>alert ('FILE NOT UPLOADED');</script>";

	}
}
?>