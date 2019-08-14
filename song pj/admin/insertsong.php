<?php include_once "../include/db.php"; ?>
<?php include_once "include_admin/header.php"; ?>
<?php include_once "include_admin/navigation.php"; ?>
<?php include_once "include_admin/sidebar.php"; ?>
    <?php 
     if (isset($_POST['insert_song'])) {
     
     $song_title = $_POST['title'];
     $artist = $_POST['artist'];
     $album = $_POST['album'];
     $genre=$_POST['genre'];
     $image= $_FILES['image']['name'];
     $song_image_temp=$_FILES['image']['tmp_name'];
     move_uploaded_file($song_image_temp,"img/$image");
     // $m_link = $_POST['m_link'];
     $date = $_POST['song_date'];
     // $length = $_POST['length'];
     // $size = $_POST['size'];
     $audio= $_FILES['audio']['name'];
     $audio_temp=$_FILES['audio']['tmp_name'];
     move_uploaded_file($audio_temp,"../audio/$audio");
      $query="INSERT INTO music(song_title, artist, album, genre, image, song_date, audio) VALUES ('$song_title','$artist','$album','$genre','$image',now(),'$audio')";
      $result = mysqli_query($con,$query);
    if(!$result) {
      die("Query Failed" . mysqli_error($result));
    }
  }
?>
  </div><!--/.sidebar-->
  <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">     
      <!--/.row-->
    <div class="container col-lg-12">
     <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
         <!--  <div class="panel-heading">Form Elements</div> -->
          <div class="panel-body">
            
              <form action="" method="post" enctype="multipart/form-data">
              
                <div class="form-group">
                   <label for="" class="control-label">Title</label>
                  <input type="text" class="form-control" name="title">
                </div>
                                
                <div class="form-group">
                  <label for="" class="control-label">Artist</label>
                  <input type="text"class="form-control" name="artist">
                </div>
                <div class="form-group">
                  <label for="" class="control-label">Album</label>
                  <input type="text" class="form-control" name="album">
                </div>
                <div class="form-group">
                  <label for="" class="control-label">Genre</label>
                  <select name="genre" id="" class="form-control">
                       <option value="pop">Pop</option>
                       <option value="rap">Rap</option>
                       <option value="hip hop">Hip Hop</option>
                       <option value="rock">Rock</option>
                       <option value="r&b">R&B</option>
                       <option value="edm">EDM</option>
                       <option value="country">Country</option>
                 </select>
                </div>
                <div class="form-group">
                  <label for="" class="control-label">Date</label>
                  <input type="date" class="form-control" name="song_date">
                </div>
               
                <div class="form-group">
                  <div style="width: 50%;">
                      <label>Upload Image</label>
                        <img id="image" class="imagePreview" alt="" width="100%">
                        </div>
                        <label for="add_image" class="btn btn-default form-control" style="width: 100px!important">Choose File</label>
                        <input type="file" name="image" id="add_image" onchange="displaySelectedPhoto('add_image','image')" accept="image/*" style="visibility: hidden;">
                      </div>
                      <label>Upload Audio</label><br> <br>  
                       <label for="add_image" class="btn btn-default form-control" style="width: 100px!important">Choose File</label>
                        <input type="file" name="image" id="add_image" onchange="displaySelectedPhoto('add_image','image')" accept="image/*" style="visibility: hidden;">        
                    
                <input type="submit" name="insert_song" value="Insert" class="btn btn-primary">
                    </div>
                    
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>      
    
  
              <?php include_once "include_admin/footer.php"; ?>
   

