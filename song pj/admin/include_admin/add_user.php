 <?php include_once "../include/db.php"; ?>
<?php 
	if (isset($_POST['create_user'])) {
		$user_firstname = $_POST['user_firstname'];
		$user_lastname = $_POST['user_lastname'];
		$username = $_POST['username'];
		$user_email = $_POST['user_email'];
		$user_password = $_POST['user_password'];
		//$user_comment = $_POST['user_comment'];
		$user_role = $_POST['user_role'];

		//$user_password=password_hash($user_password,PASSWORD_BCRYPT, array('cost' =>10 ));

		$query ="INSERT INTO users(username, user_password, user_firstname, user_lastname, user_email, user_role) VALUES ('$username','$user_password','$user_firstname','$user_lastname','$user_email','$user_role')";
		$result = mysqli_query($con,$query);
		if (!$result) {
			die("Query Failed." . mysqli_error($result));
		}
		// echo "Created User Successfully." . "<a href='users.php'>View All Users</a>";
	}
?>

<form action="" method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label for="" class="control-label">First Name</label>
		<input type="text" class="form-control" name="user_firstname">
	</div>

	<div class="form-group">
		<label for="" class="control-label">Last Name</label>
		<input type="text" class="form-control" name="user_lastname">
	</div>

	<div class="form-group">
		<label for="" class="control-label">User Role</label>
		<select name="user_role" id="" class="form-control">
			<option value="">-- Select User Role --</option>
			<option value="admin">Admin</option>
			<option value="subscriber">Subscriber</option>
		</select>

	<div class="form-group">
		<label for="" class="control-label">User Name</label>
		<input type="text" class="form-control" name="username">
	</div>

	<div class="form-group">
		<label for="" class="control-label">User Email</label>
		<input type="text" class="form-control" name="user_email">
	</div>

   
	<div class="form-group">
		<label for="" class="control-label">Password</label>
		<input type="password" class="form-control" name="user_password">
	</div>

	<div class="form-group">
		<input type="submit" name="create_user" value="Add User" class="btn btn-primary">
	</div>
</form>