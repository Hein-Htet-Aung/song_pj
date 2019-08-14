<?php include_once "include/db.php"; ?>
<?php include_once "include/header.php"; ?>
<?php include_once "include/nav.php"; ?>


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

                    $song_query = "SELECT * FROM artist";
                    $find_count = mysqli_query($con,$song_query);
                    $count = mysqli_num_rows($find_count);
                    $count = ceil($count/4);

                    $query = "SELECT * FROM artist LIMIT $page_one,4";
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
                
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- Pager -->
                <ul class="pager">
                   <?php 
                        for($i=1 ;$i<=$count ;$i++){
                            if($i==$page){
                                echo "<li><a class='active_link' href='artist.php?page=$i'>$i</a></li>";
                            }else{
                                echo "<li><a href='artist.php?page=$i'>$i</a></li>";
                            }                            
                        }
                    ?>
                </ul>
        </div>
    </div>
</div>
                

           


   
    
        <div class="text-center">
            <div class="copyright"><br><br><br><br>
                &copy; 2019 <a target="_blank">Our music world</a>. All Rights Reserved.
            </div>
        </div>
    </div>
    
 <?php include_once "include/footer.php"; ?>