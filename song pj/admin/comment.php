
<?php ob_start(); ?>
<?php include_once "../include/db.php"; ?>
<?php include_once "include_admin/header.php"; ?>
<?php include_once "include_admin/navigation.php"; ?>
<?php include_once "include_admin/sidebar.php"; ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

                    <style>
                          .mt-5{
                            margin-top: 5px;
                          }
                      </style> 
<div class="col-xs-12">
    <table class="table table-bordered table-responsive table-hover">
        <thead>
            <tr>
                <th style="width: 20px;">No</th>
                <th>Name</th>                
                <th>Email</th>
                <th>Comment</th>
                <th  style="width: 20px;">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no=1;
                $query = "SELECT * FROM comments";
                $result = mysqli_query($con,$query);
                while($row=mysqli_fetch_assoc($result)) {
                    $user_id=$row['user_id'];                   
                    $username=$row['username'];
                    $email=$row['email'];
                    $comment=$row['message'];                  
                    echo "<tr>";
                    echo "<td>$no</td>";
                    echo "<td>$username</td>";                  
                    echo "<td>$email</td>";                    
                   
                    
                    
                    echo "<td>$comment</td>";
                    
                    echo "<td><a href='comment.php?delete=$user_id'class='btn btn-danger btn-sm mt-5'><i class='fa fa-trash'>Delete</td>";
                    echo "</tr>";
                     $no=$no+1;
                }
             ?>
            
        </tbody>
    </table>
</div>


<?php 
    if(isset($_GET['delete'])){
        $user_id=mysqli_real_escape_string($con,$_GET['delete']);
        $query="DELETE FROM comments WHERE user_id=$user_id";
        $result=mysqli_query($con,$query);
        if(!$result){
            die("Query Failed" . mysqli_error($result));
        }
        header('Location:comment.php');
    }
 ?>


<?php include_once "include_admin/footer.php"; ?>