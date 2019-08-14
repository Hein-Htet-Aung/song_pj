<?php include_once "include/db.php"; ?>
<?php include_once "include/header.php"; ?>
<?php include_once "include/nav.php"; ?>
	
	<div class="slider">		
		<div id="about-slider">
			<div id="carousel-slider" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators visible-xs">
					<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-slider" data-slide-to="1" class="active"></li>
					<li data-target="#carousel-slider" data-slide-to="2" class="active"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">						
						<img src="img/work/1.jpg" class="img-responsive" alt="" style="width:100%;
						"> 
						<div class="carousel-caption" style="padding-bottom: 200px;">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">		
								<h2>Our Music World</h2>
							</div>
						</div>
				    </div>
				    <div class="item">
						<img src="img/work/7.jpg" class="img-responsive" alt="" style="width:100%;"> 
						<div class="carousel-caption" style="padding-bottom: 200px;">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">		
								<h2>Our Music World</h2>
							</div>
						</div>
				    </div> 
				    <div class="item">
						<img src="img/work/6.jpg" class="img-responsive" alt="" style="width:100%;"> 
						<div class="carousel-caption" style="padding-bottom: 200px;">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">				
								<h2>Our Music World</h2>
							</div>
						</div>
				    </div> 
				</div>
				<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i> 
				</a>
				<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i> 
				</a>
			</div> <!--/#carousel-slider-->
		</div><!--/#about-slider-->
	</div><!--/#slider-->
	<div id="featured">
		<div class="container">
			<div class="text-center">
				<h3>Artist</h3>
			</div><br><br>
			<div class="row">
				<?php 
					 $query = "SELECT * FROM artist LIMIT 4";
                    $result = mysqli_query($con,$query);

                    while($row=mysqli_fetch_assoc($result)){
                        $id=$row['id'];
                        $artist_name=$row['artist_name'];
                        $image=$row['image'];
				 ?>
					   <div class="col-sm-3 wow fadeInDown" data-wow-offset="0" data-wow-delay="0.3s"  >
                              <div style="border:1px solid #ccc; ">
                                    <a href="artist_song.php?a_name=<?php echo $artist_name; ?>">
                                        <img class="img-responsive" src="admin/img/<?php echo $image ?>" alt="" style="width: 100%; height: 200px;">
                                         <p class="text-left" style="margin-top: 3px;text-align: center;"><?php echo $artist_name; ?></p>
                                     </a> 
                             </div> 
                          </div> 
                 <?php 
                    }
                 ?>
          	</div>
			</div>		
				
			</div>
			<br>
				<div class="container">
					<div class="row col-md-offset-5" style="margin-left: 45%;">
						<a href="artist.php"><button class="btn btn-default " > See More</button></a>
					</div>
				</div>
				<br>
		</div>
	</div>
	<div id="gallery"  style="padding-top:-70px;">
		<div class="container">
			<div class="text-center">
				<h3>Album</h3>
			</div>
			<br><br>
			<div class="row">
				<?php 
					 $query = "SELECT * FROM album LIMIT 4";
                    $result = mysqli_query($con,$query);

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
                             </div> 
                          </div> 
                 <?php 
                    }
                 ?>
      
				
			</div>
		</div>
	</div>
	<br>
	<div class="container">
				<div class="row col-md-offset-5" style="margin-left: 45%;">
					<a href="album.php"><button class="btn btn-default">See More</button></a>
				</div>
				<br>
			</div>
	<div id="our-team">
		<div class="container">
			<div class="text-center">
				<h3>Our Team</h3>
			</div>
		</div>
		<div class="team">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="text-center">
							<img src="img/team/9.jpg" alt="" style="width: 35%;height: 30%;" img-responsive class="img-circle">
							<h2>Ma Thin Sut Wai</h2>
							<h4>Web Development,PHP</h4>
							<p>Technological University <br>Monywa,Sagaing Region</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="text-center">
							<img src="img/imgnew/1.jpg" alt="" style="width: 35%;height: 30%;" img-responsive class="img-circle">
							<h2>Ma Theint Nandar Tun</h2>
							<h4>Web Designer</h4>
							<p>University Of Computer Studies <br>Myitkyina,Kachin State </p>
						</div>
					</div>
				</div>
				<div class="row">
				<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<img src="img/imgnew/10.jpg" alt="" style="width: 35%;height: 30%;" img-responsive class="img-circle">
						<h2>Ma Thin Thin Myat</h2>
						<h4>Web Development,PHP</h4>
						<p>University Of Computer Studies <br>Maubin,Ayeyarwaddy Region</p>
					</div>
				</div>	
					<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<img src="img/imgnew/2.jpg" alt="" style="width: 35%;height: 30%;" img-responsive class="img-circle">
						<h2>Ma Myint Myint Wai</h2>
						<h4>Web Development,PHP</h4>
						<p>University Of Computer Studies <br>Pyay,Bago Region</p>
					</div>
				</div>	
					<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
					<div class="text-center">
						<img src="img/imgnew/3.JPG" alt="" style="width: 35%;height: 60%;" img-responsive class="img-circle">
						<h2>Ma May Win Thiri</h2>
						<h4>Andriod Developer</h4>
						<p>University Of Computer Studies <br>Yangon</p>
				</div>
				</div>	
				</div>
			</div>
		</div>
	</div><!--/#our-team-->

	<?php  
                       if(isset($_POST['submit'])){
                         echo $username=$_POST['username'];
                         echo $email=$_POST['email'];
                         $message=$_POST['message'];

                        $query="INSERT INTO comments(username,email,message) VALUES ('$username','$email','$message')";
                        $result=mysqli_query($con,$query);
                        if(!$result){
                            die("Query Failed".mysqli_error($result));
                        }else{
                            echo "Successfully Send";
                        }

                       }
                     ?>

	<footer>
		 <div id="contact">
            <div class="container">
                <div class="text-center">
                    <h3>Contact Us</h3>
                    
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.2s">
                        <h2>Contact us any time</h2>
                        <p>Email us with any questions or inquiries or call +38 000 129900.
                        	We would be happy to answer your questions and set up a meeting with you.</p>               
                    </div>              
                    
                    <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.4s">
                        <h2>Contact Info</h2>
                        <ul>
                            <div class="col-md-1" >
                            <li style="margin-left:-12px;"><i class="fa fa-home fa-2x"></i>
                            </div>
                            <div class="col-md-11">
                             Office # 38, Suite 54 Elizebth Street, Victoria State Newyork, USA 33026</li><hr>
                            </div>
                            <div class="col-md-1" >
                            <li style="margin-left:-12px;"><i class="fa fa-phone fa-2x"></i></div>
                                <div class="col-md-11">
                             +38 000 129900</li><hr></div>
                              <div class="col-md-1" >
                            <li style="margin-left:-12px;"><i class="fa fa-envelope fa-2x"></i></div>
                                <div class="col-md-11">
                             info@domain.net</li></div>
                        </ul>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">                   
                        <form action="" method="post" style="margin-top: 25px;" >
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" id="exampleInputName" placeholder="User Name *">                           
                            </div>
                            <div class="form-group">                            
                                <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="email *">
                            </div>
                       
                            <!-- <div class="form-group">
                                <input type="subject" class="form-control" placeholder="Subject">
                            </div>
                                -->
                                <div>                   
                            <textarea class="form-control" name="message" rows="5"></textarea> 
                            </div>                        
                            <div class="form-group">
                                <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                            </div>
                        </form>
                    </div>  
                </div>
            </div>
        </div><!--/#contact-->                  
       <div class="text-center">
			<div class="copyright">
				&copy;<a target="_blank" >Our music world</a>.Your website 2019
			</div>
             
<?php include_once "include/db.php"; ?>
<?php include_once "include/header.php"; ?>
<?php include_once "include/nav.php"; ?>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <?php include_once "include/footer.php"; ?>
		</div>									
	</footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <?php include_once "include/footer.php"; ?>

 


