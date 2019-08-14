<?php include_once "../include/db.php"; ?>
<?php include_once "include_admin/header.php"; ?>
<?php include_once "include_admin/navigation.php"; ?>
<?php include_once "include_admin/sidebar.php"; ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .mt_50{
    margin-top: 50px;
    font-size: 15px;
  }
  .mt-5{
    margin-top: 50px;
  }
</style>
    
    <div class="row" style="margin-left: 10px;">
      <table class="table table-bordered table-hover" id="datatable">
      <thead>
        <tr>
          <!-- <th><input type="checkbox" id="checkboxth" name="" class="check_main"></th> -->
          <th style="width: 20px;">No</th>
          <th>Album</th>
          <th style="width: 120px;">Image</th>
          <th style="width: 50px;">Edit</th>   
          <th style="width: 50px;">Delete</th>  
        </tr>
      </thead>
       <tbody>
               <?php 
                    $no=1;
                    $query ="SELECT * FROM album ORDER BY id DESC";
                    $result = mysqli_query($con,$query);
                    while ($row=mysqli_fetch_assoc($result)) 
                    {
                        $id = $row['id'];
                        $album = $row['album_name'];
                        $image = $row['image'];
                        echo "<tr>";
             

                     
                        echo "<td><p class='mt_50'>$no</p></td>";                       
                        echo "<td><p class='mt_50'>$album</p></td>";
                        echo "<td><img class='img-responsive' width='100%' src='img/{$image}' alt=''></td>";
                         $song_query = "SELECT * FROM music WHERE album='$album'";
                        $count = mysqli_query($con,$song_query);
                        $count = mysqli_num_rows($count);
                        ?>
                        <!-- <td>
                          <a href='albumlist.php?edit=<?php //echo $album;?>'>Edit</a>
                        </td> -->
                        <td><a href='albumedit.php?album_id=<?php echo $id?>'class="btn btn-primary btn-sm mt-5"><i class="fa fa-edit"></i>Edit</a></td>
                        <td>
                          <a onclick="javascript: return confirm('Are You Sure You Want To Delete\nTotal Song = <?php echo $count; ?>');" href='albumlist.php?delete=<?php echo $album;?>' class="btn btn-danger btn-sm mt-5"><i class="fa fa-trash"></i> Delete
                          </a>
                        </td>
                        
                        <?php

                        echo "</tr>";
                         $no=$no+1;
                    }
                 ?>
                
            </tbody>

      

  </table>
  <div>
  
  
<?php include_once "include_admin/footer.php"; ?>

<?php 
    if(isset($_GET['delete'])){
        $a_name=$_GET['delete'];
        $query="DELETE FROM album WHERE album_name='$a_name'";
        $result=mysqli_query($con,$query);
         $song_query="DELETE FROM music WHERE album='$a_name'";
          $result1=mysqli_query($con,$song_query);
         if(!$result){
             die("Query Failed" . mysqli_error($result));
         }
        header('Location:albumlist.php');
    }
 ?>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
   $(document).ready( function () {
      $('#datatable').DataTable();
  } );
 </script>