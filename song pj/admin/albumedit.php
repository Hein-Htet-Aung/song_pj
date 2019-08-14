 <?php include_once "../include/db.php"; ?>
<?php include_once "include_admin/header.php"; ?>
<?php include_once "include_admin/navigation.php"; ?>
<?php include_once "include_admin/sidebar.php"; ?>


<?php 
	if(isset($_GET['album_id'])){
		
	$s_id = $_GET['album_id'];
	$query = "SELECT * FROM album WHERE id=$s_id";
	$result = mysqli_query($con,$query);
	while ($row=mysqli_fetch_assoc($result)) {
		$album = $row['album_name'];
		$image = $row['image'];
		}
	}
 ?>

<?php 
	if(isset($_POST['edit'])){
		$album = $_POST['album_name'];
		$image = $_FILES['image']['name'];
		$song_image_temp=$_FILES['image']['tmp_name'];
		move_uploaded_file($song_image_temp, "img/$image");

// for no image change
		if(empty($image)){
			$query = "SELECT * FROM album WHERE id=$s_id";
			$select_image = mysqli_query($con,$query);
			while ($row=mysqli_fetch_assoc($select_image)) {
				$song_image=$row['image'];
			}
		}

		

		
		

		 $query = "UPDATE album SET album_name='$album',image='$image' WHERE id=$s_id";

		 $result = mysqli_query($con,$query);
		 if(!$result){
		 	die('Query Failed' . mysqli_error($result));
		 }
	}
 ?>

<form action="" method="post" enctype="multipart/form-data">
	
	<div class="form-group">
		<label for="" class="control-label">Album</label>
		<input type="text" class="form-control" name="album_name" value="<?php echo $album; ?>">
	</div>
		
	<div class="form-group">
		<label for="" class="control-label">Image</label>
		<input type="file" class="form-control" name="image"><br>
	</div>
	
	
	<div class="form-group">
		<input type="submit" name="edit" value="Edit" class="btn btn-primary">
	</div>
</form>
<?php include_once "include_admin/footer.php"; ?>