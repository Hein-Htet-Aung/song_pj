<?php include_once "include/db.php"; ?>
<?php include_once "include/header.php"; ?>
<?php include_once "include/nav.php"; ?>

 <!-- <div class="text-center" style="background-color: #333;">
        <div style="padding-top: 80px;">


            <h3 style="color: #fff;font-size: 30px;font-weight: 400;">All Songs</h3><br>

            
            <form class="" action="search_artist.php" method="post">
                <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." style="padding-top: 21px;padding-bottom: 21px;">
                        <span class="input-group-btn">
                            <button class="btn btn-info btn-sm" type="button"><span class="glyphicon glyphicon-search" aria-hidden="true">
                        </span>
                    </div>
            </form> 
           
        </div>
    </div>  --> 

     <div class="container" style="margin-top: 100px;">
                    <div class="row" >
                       <div class="effect-chico">
      
      <?php 
       if(isset($_POST['submit'])){
       $song_title=$_POST['search'];

       $song_title=mysqli_real_escape_string($con,$song_title);
          
      $query="SELECT * FROM music WHERE song_title='$song_title'";
      $result=mysqli_query($con,$query);
      if(!$result){
        die("Query Failed".mysqli_error($result));
      }
      while($row=mysqli_fetch_assoc($result)){
        //$id=$row['id'];
        
        $song_title = $row['song_title'];
          $artist = $row['artist'];
          $album = $row['album'];
          $genre = $row['genre'];
          $image = $row['image'];
          $date = $row['song_date'];
          // $length = $row['length'];
          // $size = $row['size'];
          $audio = $row['audio'];
          $song_download = $row['m_link'];
        
      }
      // if($album == $db_album){
      //   $_POST['id']=$db_id;
      //   $_POST['song_title']=$db_title;
      //   $_POST['artist']= $db_artist;
      //   $_POST['album']= $db_album;
      //   $_POST['genre']=$db_genre;
      //   $_POST['image']= $db_image;
      //   $_POST['song_date']=$db_date;
      //   $_POST['length']=$db_length;
      //   $_POST['size']=$db_size;
      //   $_POST['m_link']=$db_link;

                 
      // }
       
       ?>
   <div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s" >
       <div style="border:1px solid #ccc;">
         
                <img class="img-responsive" src="admin/img/<?php echo $image ?>" alt="">
                                       
                                       
                <p class="text-left" style="margin-top: 3px; text-align: center;">Title:<?php echo $song_title; ?></p>
                <p class="text-center" style="margin-top: 3px;">Artist:<?php echo $artist; ?></p>
                <p class="text-center" style="margin-top: 3px;">Album:<?php echo $album; ?></p>
                <div class="text-center"><a href="audio/<?php echo $audio ?>" class="btn btn-primary" download style="padding: 5px!important;">Download</a>
                                  <audio preload="auto" controls style="width: 260px; padding-left: 4px;">
                          <source src="audio/<?php echo $audio; ?>">
                        </audio>
                                  </div>
         </div>
          </div>
            <?php } ?>


                  </div>              
              </div>
           </div>
          <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
             <a href="reputation.html" class="thumbnail">
              <img src="img/ta/17.jpg" class="img-responsive" alt="">
              <p style="padding-top: 10px;text-align: center;">Essentials
              </p><br>   
             </a>
          </div> -->
          <!-- <div class="social-icon">
            <div class="container">
                <div class="col-md-6 col-md-offset-3">                      
                    <ul class="social-network">
                        <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="#" class="dribbble tool-tip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#" class="pinterest tool-tip" title="Pinterest"><i class="fa fa-pinterest-square"></i></a></li>
                    </ul>                       
                </div>
            </div>
        </div> -->
                         
        <div class="text-center">
            <div class="copyright">
                &copy; 2015 <a target="_blank" href="http://bootstraptaste.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">bootstraptaste</a>. All Rights Reserved.
            </div>
        </div>
    
   <?php include_once "include/footer.php"; ?>
