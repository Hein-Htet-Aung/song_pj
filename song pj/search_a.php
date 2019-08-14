<!-- Header -->
<?php include_once "include/db.php"; ?>
<?php include_once "include/header.php"; ?>
<?php include_once "include/nav.php"; ?>
<?php include_once "b1/final.php";?>

<div class="text-center" style="background-color: #333;">
        <div style="padding-top: 100px;padding-bottom: 60px;">

            <h3 style="color: #fff;font-size: 30px;font-weight: 400;">Artist</h3><br>

            <!-- search -->
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form class="" action="search_a.php" method="post">
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
                            $b = bigram('artist');
                            $a = $b[0]; 

                            # code...
                        }
                       

                         $query = "SELECT * FROM artist WHERE artist_name ='$a'";
                    $result = mysqli_query($con,$query);
                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $artist_name=$row['artist_name'];
                        $image=$row['image'];
                        ?>
                    
                          <div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s"  >
                              <div style="border:1px solid #191616; ">
                                    <a href="artist_song.php?a_name=<?php echo $artist_name; ?>">
                                        <img class="img-responsive" src="admin/img/<?php echo $image ?>" alt="" style="width: 100%; height: 200px;">
                                         <p class="text-left" style="margin-top: 3px;text-align: center;"><?php echo $artist_name; ?></p>
                                     </a>    
                                 
                             </div> 
                          </div> 
       
            <!-- <div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s" > -->
                <?php 
                    }
                 ?>

                        </div>              
                    </div>
                   </div>
 <!-- </div> -->
                

 




<!-- footer -->
   <br><br><br><br><br><br><br><br>                  
        <div class="text-center">
            <div class="copyright">
                &copy; 2019 <a target="_blank">Our music world</a>. All Rights Reserved.
            </div>
        </div>
    </div>

    
 <?php include_once "include/footer.php"; ?>