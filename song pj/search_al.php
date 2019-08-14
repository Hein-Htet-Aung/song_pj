<?php include_once "include/db.php"; ?>
<?php include_once "include/header.php"; ?>
<?php include_once "include/nav.php"; ?>
<?php include_once "b1/final.php";?>

<div class="text-center" style="background-color: #333;">
        <div style="padding-top: 100px;padding-bottom: 60px;">

            <h3 style="color: #fff;font-size: 30px;font-weight: 400;">Album</h3><br>

            <!-- search -->
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form class="" action="search_al.php" method="post">
                        <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." style="padding-top: 21px;padding-bottom: 21px;" name="search">
                        <span class="input-group-btn">
                            <button class="btn btn-info btn-sm" type="submit" name='submit'><span class="glyphicon glyphicon-search" aria-hidden="true">
                        </span>
                    </div>
            </form> 
                    </div>
                </div>
            </div>
           
        </div>
    </div>  
                <!-- First Blog Post -->
                <div class="container" style="margin-top: 100px;">
                    <div class="row">
                       <div class="effect-chico">
                        <?php
                        if (isset($_POST['submit'])) {
                            $b = bigram('album');
                            $a = $b[0]; 

                            # code...
                        }
                    $query1 = "SELECT * FROM album WHERE album_name = '$a'";
                    $result = mysqli_query($con,$query1);
                         while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $album_name=$row['album_name'];
                        $image=$row['image'];
                    
                 ?>
                          <div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s"  >
                              <div style="border:1px solid #191616; ">
                                    <a href="album_song.php?a_name=<?php echo $album_name; ?>">
                                        <img class="img-responsive" src="admin/img/<?php echo $image ?>" alt="" style="width: 100%; height: 200px;">
                                       
                                         
                                         <p class="text-left" style="margin-top: 3px;text-align: center;"><?php echo $album_name; ?></p>
                                     </a>    
                                 
                                 <!-- <div class="text-center"><a href="https://www.google.com/" class="btn btn-primary" download style="padding: 5px!important;">Download</a>
                                  </div>   
                                  <br><br>
                                 <div class="col-md-3 poca-music-player" style="margin-left: -19px;">
                                <audio preload="auto" controls style="width: 260px; padding-left: 4px;">
                                <source src="music/Taylor Swift - Reputation (2017) (Mp3 320kbps) [Hunter]/Call It What You Want.mp3">
                                </audio>
                              </div> -->
                             </div> 
                          </div> 
       
            <!-- <div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s" > -->
                <?php 
                    }
                 ?>

                        </div>              
                    </div>
                   </div>

                       <div class="social-icon">
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
        </div>                      
        <div class="text-center">
            <div class="copyright">
                &copy; 2019 <a target="_blank" href="http://bootstraptaste.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">our music world</a>. All Rights Reserved.
            </div>
        </div>
    </div>
    
 <?php include_once "include/footer.php"; ?>