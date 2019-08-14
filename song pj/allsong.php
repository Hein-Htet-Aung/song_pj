<?php include_once "include/db.php"; ?>
<?php include_once "include/header.php"; ?>
<?php include_once "include/nav.php"; ?>
<style>
  .active_link{
    background-color: #f00!important;
    color: #fff!important;
  }
</style>

  

    <div class="text-center" style="background-color: #333;">
        <div style="padding-top: 100px;padding-bottom: 60px;">

            <h3 style="color: #fff;font-size: 30px;font-weight: 400;">All Songs</h3><br>

            <!-- search -->
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <form class="" action="search_a_song.php" method="post">
               

                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." style="padding-top: 21px;padding-bottom: 21px;" name="search">
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
      
     
               <div class="container" style="margin-top: 100px;" >
                    <div class="row" >
                       <div class="effect-chico">
                        
                        
                <?php 
                    if(isset($_GET['page'])){
                        $page = $_GET['page'];
                    }else{
                        $page = 0;
                    }

                    if($page == ''|| $page==1 || $page == 0){
                        $page_one = 0;
                    }else{
                        $page_one = ($page * 8) -8;
                    }

                    $song_query = "SELECT * FROM music";
                    $find_count = mysqli_query($con,$song_query);
                    $count = mysqli_num_rows($find_count);
                    $count = ceil($count/8);                
                    // echo $count;   
                    $query = "SELECT * FROM music ORDER BY id DESC limit $page_one,8";
                    $result = mysqli_query($con,$query);
                    $music_count = mysqli_num_rows($result);

                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $song_title=$row['song_title'];
                        $album=$row['album'];
                         $artist = $row['artist'];
                        $image=$row['image'];
                         $audio = $row['audio'];
                    
                 ?> 
                          <div class="col-md-3" style="margin-top: 30px!important;">
                              <div style="border:1px solid #191616;">
                                    
                                        <img class="img-responsive" src="admin/img/<?php echo $image ?>" alt="" style="width: 100%; height: 200px;">
                                       
                                        <p class="text-left" style="margin-top: 3px;text-align: center;">
                                             Song:<?php echo $song_title; ?>
                                        </p>
                                        <p class="text-center" style="margin-top: 3px;">Artist:<?php echo $artist; ?></p>
                                         <p class="text-left" style="margin-top: 3px;text-align: center;">Album:<?php echo $album; ?></p>
                                 <div class="text-center"><a href="audio/<?php echo $audio; ?>" class="btn btn-primary" download style="padding: 5px!important;">Download</a>
                                 <audio preload="auto" controls style="width: 260px; padding-left: 4px;">
                                  <source src="audio/<?php echo $audio; ?>">
                                  </audio>
                                  </div>   
                                  <!-- <br><br> --> 
                              </div>
                             </div> 
            <!-- <div class="col-md-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s" > -->
                <?php 
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
                  <ul id="example" class="pagination">
                   <?php  if(isset($_GET['page'])){
                      if($_GET['page'] <= $count && $_GET['page'] > 0){ ?>
                        <li><a class="" href="allsong.php?page=<?php echo isset($_GET['page']) ? $_GET['page'] - 1 : ""; ?>">Prev</a>
                        </li>
                  <?php
                    }
                    }

                            $c = isset($_GET['page']) ? $_GET['page'] +1 : 0;
                            $page_no=$count-$page;
                            $res_page_no=$page_no >= 8 ? 8 : $page_no-1;
                            if($page == 0){
                              $c=2;
                            }
             
                            for($i=($c-1) ;$i<=($c + $res_page_no) ;$i++){
                                
                               if($i==$page){
                              }else if(($i-1)==0){
                                  echo "<li><a style='background-color:red;' href='allsong.php?page=$i'>$i</a></li>";
                                }
                                else{
                                    echo "<li><a href='allsong.php?page=$i'>$i</a></li>";
                                }

                            }                            
                      
                  if(isset($_GET['page'])){
                      if($_GET['page'] < $count){ ?>
                        <li><a class="next" href="allsong.php?page=<?php echo isset($_GET['page']) ? $_GET['page'] +1 : 1; ?>">Next</a></li>
                  <?php
                    }
                    }else{ ?>
                        <li><a class="next" href="allsong.php?page=<?php echo isset($_GET['page']) ? $_GET['page'] +1 : 1; ?>">Next</a></li>
                  <?php
                    }
                  ?>
                    
                    </ul>
                </ul>
        </div>
    </div>
</div>                   
                   
 
   
      <?php include_once "include/footer.php"; ?>
      <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

      <script type="text/javascript">
        $(function(){
          paginateLoad(0);
          let no=0;
          $(document).on('click','.next',function(){
            console.log(++no);
            $(".pagination").text(++no);
          });
        });
      </script>

    