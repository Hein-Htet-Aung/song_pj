<?php include_once "include/db.php"; ?>
<?php include_once "include/header.php"; ?>
<?php include_once "include/nav.php"; ?>

<?php  
                       if(isset($_POST['submit'])){
                       echo $username=$_POST['username'];
                       echo $email=$_POST['email'];
                       echo $message=$_POST['message'];
                       
                        $query="INSERT INTO comments( username, email, message) VALUES ('$username','$email','$message')";
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
            <div class="copyright"><br><br><br><br><br><br><br>
                &copy; 2019 <a target="_blank">Our music world</a>. All Rights Reserved.
            </div>  
        </div>                                  
    </footer>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php include_once "include/footer.php"; ?>

