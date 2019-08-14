<?php require_once "db.php"; ?>
<?php 
ob_start();
session_start(); ?>
<?php 
	if(isset($_POST['login'])){
		
		$username = $_POST['username'];
		$password = $_POST['password'];
     // if (!isset($username) && !isset($password)) {
     // 	 header('Location: ../admin/login.php');
     // }
		$username = mysqli_real_escape_string($con,$username);
		$password = mysqli_real_escape_string($con,$password);


		$query = "SELECT * FROM users WHERE username ='$username'";
		$result = mysqli_query($con,$query);
		if(!$result){
		 	die("Query Failed" . mysqli_error($result));
		 }
		 while($row = mysqli_fetch_assoc($result)){
		 	$db_id=$row['user_id'];

		 	$db_username=$row['username'];
		 	$db_password=$row['user_password'];
		 	$db_role = $row['user_role'];
		 	
		 }
		 	if($password==$db_password AND $db_role == 'admin'){
		 	$_SESSION['username'] = $db_username;
		 			 	
		 	 header('Location: ../admin/index.php');
		 	
			 }else{
			 	header('Location: ../admin/login.php');
			 }
	}
 ?>