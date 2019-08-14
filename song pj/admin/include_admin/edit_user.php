<?php include_once "../include/db.php"; ?>
<?php
	if (isset($_GET['edit'])) {
		
	 	$the_user_id = mysqli_real_escape_string($con,$_GET['edit']);
	 	$query = "SELECT * FROM users WHERE user_id=$the_user_id";
	 	$result = mysqli_query($con,$query);
	 	if (!$result) {
	 		die("Query Failed." . mysqli_error($result));
	 	}
	 	while ($row=mysqli_fetch_assoc($result)) {
	 		$user_firstname = $row['user_firstname'];
			$user_lastname = $row['user_lastname'];
			$username = $row['username'];
			$user_email = $row['user_email'];
			$user_password = $row['user_password'];
			$user_role = $row['user_role'];
	 	}
	 } 
	if (isset($_POST['edit_user'])) {
		$user_firstname = $_POST['user_firstname'];
		$user_lastname = $_POST['user_lastname'];
		$username = $_POST['username'];
		$user_email = $_POST['user_email'];
		$user_password = $_POST['user_password'];
		$user_role = $_POST['user_role'];

		$query = "UPDATE users SET username='$username',user_password='$user_password',user_firstname='$user_firstname',user_lastname='$user_lastname',user_email='$user_email',user_role='$user_role' WHERE user_id=$the_user_id";
		$result = mysqli_query($con,$query);
		if (!$result) {
			die("Query Failed." . mysqli_error($result));
		}
	}
?>

<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="" class="control-label">First Name</label>
		<input type="text" class="form-control" name="user_firstname" value="<?php echo $user_firstname; ?>">
	</div>
	<div class="form-group">
		<label for="" class="control-label">Last Name</label>
		<input type="text" class="form-control" name="user_lastname" value="<?php echo $user_lastname; ?>">
	</div>
	<div class="form-group">
		<label for="" class="control-label">User Role</label>
		<select name="user_role" id="" class="form-control">
			<option value="<?php echo $user_role; ?>"><?php echo $user_role; ?></option>
			<?php 
				if ($user_role == 'admin') {
					echo '<option value="subscriber">Subscriber</option>';					
				}else{
					echo '<option value="admin">Admin</option>';
				}
			?>
		</select>
	</div>
	<div class="form-group">
		<label for="" class="control-label">User Name</label>
		<input type="text" class="form-control" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="form-group">
		<label for="" class="control-label">User Email</label>
		<input type="text" class="form-control" name="user_email" value="<?php echo $user_email; ?>">
	</div>
	<div class="form-group">
		<label for="" class="control-label">Password</label>
		<input type="password" class="form-control" name="user_password" value="<?php echo $user_password; ?>">
	</div>
    <div class="form-group">
		<input type="submit" name="edit_user" value="Update User" class="btn btn-primary">
	</div>
</form>