
<?php
	require_once 'database_connection.php';
	if(ISSET($_POST['update'])){
		
		$name = $_POST['name'];
	
		$current = $_POST['current'];
	
		$end = end($exp);
		$name = time().".".$end;
		$path = "profile/".$name;
		// $allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end)){
			if(unlink("profile/".$current)){
			
					mysqli_query($connect, "UPDATE `user` set `name` = '$name' WHERE `user_id` = '1'") or die(mysqli_error());
					echo "<script>alert('User account updated!')</script>";
					header("location: index.php");
				
			}		
		}else{
			echo "<script>alert('Image only')</script>";
		}
	}
?>