<?php include_once "include/header.php"; ?>
<?php include_once "include/nav.php"; ?>
<?php include_once "include/db.php"; ?>



    <!-- <div class="text-center" style="background-color: #333;">
       <div style="padding-top: 80px;">

            <h3 style="color: #fff;font-size: 30px;font-weight: 400;">Artist</h3><br>

            
            <form class="" action="search_artist_song.php" method="post">
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
                        <form class="" action="search_artist_song.php" method="post">
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
       if(isset($_POST['submit'])){

       $artist=$_POST['search'];

       $artist=mysqli_real_escape_string($con,$artist);
          
      $query="SELECT * FROM artist WHERE artist_name='$artist'";
      $result=mysqli_query($con,$query);
      if(!$result){
        die("Query Failed".mysqli_error($result));
      }
      while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        
        $artist=$row['artist_name'];
        
        $image=$row['image'];
        
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
        <a href="search_artist_song.php?name=<?php echo $artist; ?>">
          <img class="img-responsive" src="admin/img/<?php echo $image; ?>" alt="" style="width: 100%; height: 200px;">                        
            <p class="text-left" style="margin-top: 3px;text-align: center;">Artist:<?php echo $artist; ?></p>
        </a>
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
         <!--  <div class="social-icon">
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
