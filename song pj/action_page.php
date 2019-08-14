<?php require_once "include/db.php"; ?>
<?php include_once "include/header.php"; ?>

<!-- <div class="about_bg">
<div class="container"> -->
	
<section class="blog-wrap">
<div class="container">
<div class="row">
<div>
	<?php
		if(isset($_POST['submit'])){
			$search = $_POST['search'];
		
		$sql = "SELECT * FROM music WHERE title='$search'";
		$result = mysqli_query($con,$sql);
		 $count = mysqli_num_rows($result);
		if($count > 0){
			while($row = mysqli_fetch_assoc($result)){
			$title = $row['title'];
			$artist = $row['artist'];
			$album = $row['album'];
			
	
	?>

<div class="blog-tiltle_block">
<h4><a href="#"><?php echo $title; ?></a></h4>
<h4><a href="#"><?php echo $artist; ?></a></h4>
<h4><a href="#"><?php echo $album; ?></a></h4>


<div class="blog-share_block">
<ul>
<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
</ul>
</div>

</div>

<?php
                }          
           }else{
                echo "<h2 class='search'>NO RESULT</h2>";
           }
        }
?>


</div>
<div class="col-md-8">
<form action="search.php" method="post">
<input type="text" placeholder="Search" name="search" class="blog-search">
<!-- <button type="submit" name="submit" class="btn btn-warning btn-blogsearch">SEARCH</button> -->
<span class="glyphicon glyphicon-search sm"></span>

</form> 
</div>

<!-- <form action="" method="post">
	<div>
		<table class="table table-bordered table-responsive table-hover">
		          <thead>
		              <tr>
		                    
		                  <th>Title</th>
		                  <th>Artists</th>
		                  <th>Album</th>
		                  <th>Download</th>
		                  <th>Play</th>
		                    
		                    
		              </tr>
		          </thead>
		          <tbody>
		              <?php 
			              // if(isset($_POST['search'])){
			              //     $query = "SELECT * FROM music";
			              //     $result = mysqli_query($con,$query);
			              //     while ($row=mysqli_fetch_assoc($result)) {
			              //         $title=$row['title'];
			              //         $artist=$row['artist'];
			              //         $album=$row['album'];
			                        
			              //         echo "<tr>";
			                     
			              //         echo "<td>$title</td>";
			              //         echo "<td>$artist</td>";
			              //         echo "<td>$album</td>";
			              //         echo "<td><a href=''>Download</a></td>";
			              //         echo "<td><a href=''>Play</a></td>";
			                        
			              //         echo "</tr>";
			                  }
			              }
		               ?>
		                
		          </tbody>
		</table>
	</div>
</form> -->
     
	
</div>
</div>
</section>


<div id="instafeed"></div>


 <?php include_once 'include/footer.php'; ?>
 