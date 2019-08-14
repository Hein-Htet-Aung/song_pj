<?php include_once "../include/db.php"; ?>
<?php include_once "include_admin/header.php"; ?>
<?php include_once "include_admin/navigation.php"; ?>
<?php include_once "include_admin/sidebar.php"; ?>


<?php 
	if(isset($_GET['song_id'])){
		
	$s_id = $_GET['song_id'];
	$query = "SELECT * FROM music WHERE id=$s_id";
	$result = mysqli_query($con,$query);
	while ($row=mysqli_fetch_assoc($result)) {
		$song_title = $row['song_title'];
		$artist = $row['artist'];
		$album = $row['album'];
		$genre = $row['genre'];
		$image = $row['image'];
		$date = $row['song_date'];
		$audio = $row['audio'];
		}
	}
 ?>

<?php 
	if(isset($_POST['edit'])){
		$song_title = $_POST['song_title'];
		$artist = $_POST['artist'];
		$album = $_POST['album'];
		$genre = $_POST['genre'];

		$image = $_FILES['image']['name'];
		$song_image_temp=$_FILES['image']['tmp_name'];
		move_uploaded_file($song_image_temp, "img/$image");

// for no image change
		if(empty($image)){
			$query = "SELECT * FROM music WHERE id=$s_id";
			$select_image = mysqli_query($con,$query);
			while ($row=mysqli_fetch_assoc($select_image)) {
				$song_image=$row['image'];
			}
		}

		// $song_date = $_POST['song_date'];
		// $length = $_POST['length'];
		// $size = $_POST['size'];

		$audio= $_FILES['audio']['name'];
     	$audio_temp=$_FILES['audio']['tmp_name'];
     	move_uploaded_file($audio_temp,"../audio/$audio");
		

		 $query = "UPDATE music SET song_title='$song_title', artist='$artist',album='$album',genre='$genre',image='$image',song_date=now(),audio='$audio' WHERE id=$s_id";

		 $result = mysqli_query($con,$query);
		 if(!$result){
		 	die('Query Failed' . mysqli_error($result));
		 }
	}
 ?>

<form action="" method="post" enctype="multipart/form-data">
	
	<div class="form-group">
		<label for="" class="control-label">Title</label>
		<input type="text" class="form-control" name="song_title" value="<?php echo $song_title; ?>">
	</div>
	
	<div class="form-group">
		<label for="" class="control-label">Artist</label>
		<input type="text" class="form-control" name="artist" value="<?php echo $artist; ?>">
	</div>
	<div class="form-group">
		<label for="" class="control-label">Album</label>
		<input type="text" class="form-control" name="album" value="<?php echo $album; ?>">
	</div>
	<div class="form-group">
		<label for="" class="control-label">Genre</label>
		<select name="genre" id="" class="form-control">
			<option value="<?php echo $genre; ?>"><?php echo $genre; ?></option>
			
					<option value='rap'>Rap</option>	
                    <option value='hip hop'>Hip Hop</option>   	
                    <option value='rock'>Rock</option>   	
                    <option value='r&b'>R&B</option>   	
                    <option value='edm'>EDM</option>   	
                    <option value='country'>Country</option>   	
				

		</select>
	</div>
	
	<div class="form-group">
		<label for="" class="control-label">Image</label>
		<input type="file" class="form-control" name="image"><br>
	</div>
	
	<!-- <div class="form-group">
		<label for="" class="control-label">Length</label>
		<input type="text" class="form-control" name="length" value="<?php //echo $length; ?>"><br>
	</div>
	<div class="form-group">
		<label for="" class="control-label">Size</label>
		<input type="text" class="form-control" name="size" value="<?php //echo $size; ?>"><br>
	</div> -->
	<div class="form-group">
		<label for="" class="control-label">Audio</label>
		<input type="file" class="form-control" name="audio"><br>
	</div>
	<div class="form-group">
		<input type="submit" name="edit" value="Edit" class="btn btn-primary">
	</div>
</form>
<?php include_once "include_admin/footer.php"; ?>