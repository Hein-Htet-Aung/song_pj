<?php include_once "../include/db.php"; ?>
<?php include_once "include_admin/header.php"; ?>
<?php include_once "include_admin/navigation.php"; ?>
<?php include_once "include_admin/sidebar.php"; ?>
  <?php if (!isset($_SESSION['username'])) {
    header('Location: ../admin/login.php');
  }
   ?>
    <div class="row">
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-blue panel-widget ">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <svg class="glyph stroked folder"><use xlink:href="#stroked-folder"></use></svg>
            </div>
            <div class="col-sm-9 col-lg-7 widget-right">

             <?php 
                  $album_query = "SELECT * FROM album";
                  $album_result = mysqli_query($con,$album_query);
                  if (!$album_result) {

                      die("Query Failed." . mysqli_error($album_result));
                  }
                    $album_count=mysqli_num_rows($album_result);
                    $total_album_count = $album_count;
                    echo "<div class='huge'>$total_album_count</div>";
                  
               ?>
               
              <!-- <div class="large">120</div> -->
                <div class="text-muted">Albums</div>
            </div>
          </div>
        
                    <a href="albumlist.php">
                    <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </a>
         </div>
      </div>
      </div>    
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-orange panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <?php 
                        $delete_query = "SELECT * FROM comments";
                        $delete_result = mysqli_query($con,$delete_query);
                        $delete_comment_count = mysqli_num_rows($delete_result);

                        $total_comment_count = $delete_comment_count;
                        echo "<div class='huge'>$total_comment_count</div>";
               ?>
              <!-- <div class="large">52</div> -->
              <div class="text-muted">Comments</div>
            </div>
          </div>
        
            <a href="comment.php">
               <div class="panel-footer">
               <span class="pull-left">View Details</span>
               <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </a>
          </div>
          </div>
      </div> 
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-teal panel-widget">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
            </div>
            <div class="col-sm-9 col-lg-7 widget-right">
              <?php 
                                            $artist_query = "SELECT * FROM artist";
                                            $artist_result = mysqli_query($con,$artist_query);
                                            $artist_count = mysqli_num_rows($artist_result);

                                            $total_artist_count =$artist_count;
                                            echo "<div class='huge'>$total_artist_count</div>";
                                        ?>
              <!-- <div class="large"></div> -->
              <div class="text-muted">Artists</div>
            </div>
          </div>
          <a href="artistlist.php">
               <div class="panel-footer">
               <span class="pull-left">View Details</span>
               <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
              <div class="clearfix"></div>
            </a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-md-6 col-lg-3">
        <div class="panel panel-blue panel-widget ">
          <div class="row no-padding">
            <div class="col-sm-3 col-lg-5 widget-left">
              <svg class="glyph stroked music"><use xlink:href="#stroked-music"></use></svg>
            </div>
            <div class="col-sm-9 col-lg-7 widget-right">

             <?php 
                  $song_query = "SELECT * FROM music";
                  $song_result = mysqli_query($con,$song_query);
                  if (!$song_result) {

                      die("Query Failed." . mysqli_error($song_result));
                  }
                    $song_count=mysqli_num_rows($song_result);
                    $total_song_count = $song_count;
                    echo "<div class='huge'>$total_song_count</div>";
                  
               ?>
               
              <!-- <div class="large">120</div> -->
              <div class="text-muted">Songs</div>
            </div>
          </div>
        
                    <a href="songlist.php">
                    <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </a>
              </div>
           </div>
              
            </div>
          </div>
        </div>
      </div> 
    </div><!--/.row-->
     <?php include_once "include_admin/footer.php"; ?>