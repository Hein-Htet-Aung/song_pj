<?php include_once "../include/db.php"; ?>
<?php include_once "include_admin/header.php"; ?>
<?php include_once "include_admin/navigation.php"; ?>
<?php include_once "include_admin/sidebar.php"; ?>


<?php 
	if(isset($_GET['artist_id'])){
		
	$s_id = $_GET['artist_id'];
	$query = "SELECT * FROM artist WHERE id=$s_id";
	$result = mysqli_query($con,$query);
	while ($row=mysqli_fetch_assoc($result)) {
		$artist = $row['artist_name'];
		$image = $row['image'];
		}
	}
 ?>

<?php 
	if(isset($_POST['edit'])){
		$artist = $_POST['artist_name'];
		$image = $_FILES['image']['name'];
		$song_image_temp=$_FILES['image']['tmp_name'];
		move_uploaded_file($song_image_temp, "img/$image");

// for no image change
		if(empty($image)){
			$query = "SELECT * FROM artist WHERE id=$s_id";
			$select_image = mysqli_query($con,$query);
			while ($row=mysqli_fetch_assoc($select_image)) {
				$song_image=$row['image'];
			}
		}

		

		
		

		 $query = "UPDATE artist SET artist_name='$artist',image='$image' WHERE id=$s_id";

		 $result = mysqli_query($con,$query);
		 if(!$result){
		 	die('Query Failed' . mysqli_error($result));
		 }
	}
 ?>

<form action="" method="post" enctype="multipart/form-data">
	
	<div class="form-group">
		<label for="" class="control-label">Artist</label>
		<input type="text" class="form-control" name="artist_name" value="<?php echo $artist; ?>">
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