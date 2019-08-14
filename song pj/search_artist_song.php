<?php include_once "include/db.php"; ?>
<?php include_once "include/header.php"; ?>
<?php include_once "include/nav.php"; ?>

<div class="text-center" style="background-color: #333;">
       <div style="padding-top: 80px;">

          <!--   <h3 style="color: #fff;font-size: 30px;font-weight: 400;">Artist</h3><br> -->

            <!-- search -->
            <!-- <form class="" action="search_album_song.php" method="post">
                <div class="form-group">
                    <label for="search" class="control-label"></label>
                     <input type="text" placeholder="Search.." name="search"  style="width:200px; height: 40px; background-color: white; border-color: black; border-radius:10px;">
                    <button class="btn" style=" height: 39px;"><span class="glyphicon glyphicon-search"></span>
                    </button>
                </div>
            </form>  -->
           
        </div>
    </div>


     <div class="container" style="margin-top: 100px;">
                    <div class="row" >
                       <div class="effect-chico">

<?php
    

              if(isset($_GET['name'])){
                $artist_name = $_GET['name'];

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

                    $song_query = "SELECT * FROM music WHERE artist='$artist_name'";
                    $find_count = mysqli_query($con,$song_query);
                    if(!$find_count){
                      die("Query Failed".mysqli_error($con));
                    }
                    $count = mysqli_num_rows($find_count);
                    $count = ceil($count/5);

      $query = "SELECT * FROM music WHERE artist='$artist_name' LIMIT $page_one,4";
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
                              <div style="border:1px solid #191616;">
                                    
                                        <img class="img-responsive" src="admin/img/<?php echo $image ?>" alt="" style="width: 100%;height: 200px;">
                                       
                                        <p class="text-center" style="margin-top: 3px;">
                                             Song:<?php echo $song_title; ?>
                                        </p>
                                         <p class="text-center" style="margin-top: 3px;">Artist:<?php echo $artist; ?></p>
                                         <p class="text-center" style="margin-top: 3px;">Album:<?php echo $album; ?></p>
                                      
                                 
                                 <div class="text-center"><a href="audio/<?php echo $audio; ?>" class="btn btn-primary" download style="padding: 5px!important;">Download</a>
                                  <audio preload="auto" controls style="width: 260px; padding-left: 4px;">
                          <source src="audio/<?php echo $audio; ?>">
                        </audio>
                                  </div>   
                                  <!-- <br><br>
                                 <div class="col-md-3 poca-music-player" style="margin-left: -19px;">
                                
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
                                echo "<li><a class='active_link' href='search_artist_song.php?page=$i'>$i</a></li>";
                            }else{
                                echo "<li><a href='search_artist_song.php?page=$i&name=$artist_name'>$i</a></li>";
                            }                            
                        }
                    ?>
                </ul>
        </div>
    </div>
</div>


  
<?php include_once "include/footer.php"; ?>