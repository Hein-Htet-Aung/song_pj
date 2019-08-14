<?php include_once "../include/db.php"; ?>
<?php include_once "include_admin/header.php"; ?>
<?php include_once "include_admin/navigation.php"; ?>
<?php include_once "include_admin/sidebar.php"; ?>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .mt_50{
    margin-top: 30px;
    font-size: 15px;
  }
  .mt-5{
    margin-top: 30px;
  }
</style>
    <div class="row" style="margin-left: 10px;">
      <table class="table table-bordered table-hover" id="datatable">
      <thead>
        <tr>
          <!-- <th><input type="checkbox" id="checkboxth" name="" class="check_main"></th> -->
          <th style="width: 20px;">No</th>
          <th>Artist</th>
          <th style="width: 120px;">Image</th> 
          <th style="width: 50px;">Edit</th> 
          <th style="width: 50px;">Delete</th>  
        </tr>
      </thead>
       <tbody>
               <?php 
                    $no=1;
                    $query ="SELECT * FROM artist ORDER BY id DESC";
                    $result = mysqli_query($con,$query);
                    while ($row=mysqli_fetch_assoc($result)) 
                    {
                        $id = $row['id'];
                        $artist = $row['artist_name'];
                        $image = $row['image'];
                        echo "<tr>";
             

                     
                        echo "<td><p class='mt_50'> $no</td>";                       
                        echo "<td><p class='mt_50'>$artist</td>";
                        echo "<td><img class='img-responsive' width='100%' src='img/{$image}' alt=''></td>";
                         $song_query = "SELECT * FROM music WHERE artist='$artist'";
                        $count = mysqli_query($con,$song_query);
                        $count = mysqli_num_rows($count);
                        ?>
                        <td><a href='artistedit.php?artist_id=<?php echo $id?>'class="btn btn-primary btn-sm mt-5"><i class="fa fa-edit"></i>Edit</a></td>
                        <td>
                          <a onclick="javascript: return confirm('Are You Sure You Want To Delete\nTotal Song = <?php echo $count; ?>');" href='artistlist.php?delete=<?php echo $artist;?>'class="btn btn-danger btn-sm mt-5"><i class="fa fa-trash"></i>Delete</a>
                        </td>
                        <?php

                        echo "</tr>";
                        $no++;
                    }
                 ?>
                
            </tbody>

      

  </table>
  <div>
  
  
<?php include_once "include_admin/footer.php"; ?>

<?php 
    if(isset($_GET['delete'])){
        $a_name=$_GET['delete'];
        $query="DELETE FROM artist WHERE artist_name='$a_name'";
        $result=mysqli_query($con,$query);
         $song_query="DELETE FROM music WHERE artist='$a_name'";
          $result1=mysqli_query($con,$song_query);
         if(!$result){
             die("Query Failed" . mysqli_error($result));
         }
        header('Location:artistlist.php');
    }
 ?>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
   $(document).ready( function () {
      $('#datatable').DataTable();
  } );
 </script>