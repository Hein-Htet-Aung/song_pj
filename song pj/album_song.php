<?php include_once "include/db.php"; ?>
<?php include_once "include/header.php"; ?>
<?php include_once "include/nav.php"; ?>


<!-- <div class="text-center" style="background-color: #333;">
        <div style="padding-top: 80px;">


            <h3 style="color: #fff;font-size: 30px;font-weight: 400;">Album</h3><br>

            
            <form class="" action="search_artist.php" method="post">
                <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." style="padding-top: 21px;padding-bottom: 21px;">
                        <span class="input-group-btn">
                            <button class="btn btn-info btn-sm" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true">
                        </span>
                    </div>
            </form> 
           
        </div>
    </div> -->  


<div class="text-center" style="background-color: #333;">
        <div style="padding-top: 100px;padding-bottom: 60px;">

            <h3 style="color: #fff;font-size: 30px;font-weight: 400;">Artist</h3><br>

            <!-- search -->
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form class="" action="search_album.php" method="post">
                <!-- <div class="form-group">
                    <label for="search" class="control-label"></label>
                     <input type="text" placeholder="Search.." name="search"  style="width:200px; height: 40px; background-color: white; border-color: black; border-radius:10px;">
                    <button class="btn" style=" height: 39px;"><span class="glyphicon glyphicon-search"></span>
                    </button>
                </div> -->

                <!-- <div class="input-group">
                    <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedy="button-addon2">
                    <span class="input-group-btn">
                        <button class="" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                </div> -->

                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." style="padding-top: 21px;padding-bottom: 21px;">
                        <span class="input-group-btn">
                            <button class="btn btn-info btn-sm" type="submit" name="submit"><span class="glyphicon glyphicon-search" aria-hidden="true">
                        </span>
                    </div>
            </form> 
                    </div>
                </div>
            </div>
           
        </div>
    </div> 

     <div class="container" style="margin-top: 100px;">
                    <div class="row" >
                       <div class="effect-chico">

<?php
    

              if(isset($_GET['a_name'])){
                $album_name = $_GET['a_name'];

                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
                    }else{
                        $page = '';
                    }

                    if($page == ''||$page==1){
                        $page_one = 0;
                    }else{
                        $page_one = ($page * 4) -4;
                    }

                    $song_query = "SELECT * FROM music WHERE album='$album_name'";
                    $find_count = mysqli_query($con,$song_query);
                    if(!$find_count){
                      die("Query Failed".mysqli_error($con));
                    }
                    $count = mysqli_num_rows($find_count);
                    $count = ceil($count/5);

      $query = "SELECT * FROM music WHERE album='$album_name' LIMIT $page_one,4";
      $result = mysqli_query($con,$query);
      while ($row=mysqli_fetch_assoc($result)) {
          $song_title = $row['song_title'];
          $artist = $row['artist'];
          $album = $row['album'];
          $genre = $row['genre'];
          $image = $row['image'];
          $date = $row['song_date'];
          // $length = $row['length'];
          // $size = $row['size'];
          $audio = $row['audio'];
          // $song_download = $row['m_link'];
     
   
 ?>
                <div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s" >
                  <div style="border:1px solid #ccc;">
                      
                        <img class="img-responsive" src="admin/img/<?php echo $image ?>" alt="" style="width: 100%; height: 200px;">
                                       
                        <p class="text-center" style="margin-top: 3px;">
                                             Song:<?php echo $song_title; ?>
                        </p>
                        <p class="text-center" style="margin-top: 3px;">Artist:<?php echo $artist; ?></p>
                        <p class="text-center" style="margin-top: 3px;">Album:<?php echo $album; ?></p>
                        
                                 
                      <div class="text-center">
                        <a href="audio/<?php echo $audio; ?>" class="btn btn-primary" download style="padding: 5px!important;">Download</a>
                        <audio preload="auto" controls style="width: 260px; padding-left: 4px;">
                          <source src="audio/<?php echo $audio; ?>">
                        </audio>
                      </div>   
                     <!--  <br><br> -->
                      <!-- <div class="col-md-3 poca-music-player" style="margin-left: -19px;">
                        
                      </div> -->
                  </div> 
                </div> 

<?php 
       }
      
    }
?>

                  </div>              
              </div>
           </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- Pager -->
                <ul class="pager">
                   <?php 
                        for($i=1 ;$i<=$count ;$i++){
                            if($i==$page){
                                echo "<li><a class='active_link' href='album_song.php?page=$i'>$i</a></li>";
                            }else{
                                echo "<li><a href='album_song.php?page=$i&a_name=$album_name'>$i</a></li>";
                            }                            
                        }
                    ?>
                </ul>
        </div>
    </div>
</div>


  
<?php include_once "include/footer.php"; ?>