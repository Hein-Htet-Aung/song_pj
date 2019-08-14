<?php include_once "../include/db.php"; ?>
<?php include_once "include_admin/header.php"; ?>
<?php include_once "include_admin/navigation.php"; ?>
<?php include_once "include_admin/sidebar.php"; ?>
 
    <?php 
     if (isset($_POST['insert_artist'])) { 
     $artist = $_POST['artist_name'];    
     $image= $_FILES['image']['name'];
     $song_image_temp=$_FILES['image']['tmp_name'];
     move_uploaded_file($song_image_temp,"img/$image"); 
     $query="INSERT INTO artist(artist_name, image) VALUES ('$artist','$image')";
      $result = mysqli_query($con,$query);
    if(!$result) {
      die("Query Failed" . mysqli_error($result));
    }
  }
?>
  </div><!--/.sidebar-->
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">     
      <!--/.row-->
    <div class="container col-lg-12" style="width: 500px;margin-left: 300px;padding-top: 100px;">
     <div class="row" style="margin-left: 30px;">
      <div class="col-lg-12">
        <div class="panel panel-default">
         <!--  <div class="panel-heading">Form Elements</div> -->
          <div class="panel-body"> 
                  <label for="" class="control-label" style="margin-left: 128px;">Upload Image</label>
            <br>
            <form action="" method="post" enctype="multipart/form-data">                              
                <div class="form-group" style="margin-left: 128px;">
                  <div  style="width: 50%;">
                    <img src="" id="image" class="imagePreview" width="100%" alt="">
                  </div>
                  <label for="add_image" class="btn btn-primary form-control" style="width: 50%!important" >Choose File</label>
                  <input type="file" name="image" id="add_image" onchange="displaySelectedPhoto('add_image','image')" accept="image/*" style="visibility: hidden;">
                </div>
                <div class="form-group">
                  <label for="" class="control-label">Artist</label>
                  <input type="text"  class="form-control" name="artist_name">
                </div>
                <br>
                <input type="submit" name="insert_artist" value="Insert" class="btn btn-primary" style="width: 35% ;margin-left: 128px;" >
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>      
    
  
              <?php include_once "include_admin/footer.php"; ?>
   

