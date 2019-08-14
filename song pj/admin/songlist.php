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
          <th>No</th>
          <th>Title</th>
          <th>Album</th>
          <th>Artist</th>
          <th>Genre</th>
          <th>Image</th>
          <th>Date</th>
          <!-- <th>Length</th>
          <th>Size</th> -->  
          <th>Audio</th>  
          <th>Edit</th>  
          <th>Delete</th>  
        </tr>
      </thead>
       <tbody>
                <?php 
                    $no=1;
                    $query ="SELECT * FROM music ORDER BY id DESC";
                    $result = mysqli_query($con,$query);

                    while ($row=mysqli_fetch_assoc($result)) {

                        $id = $row['id'];
                        $song_title = $row['song_title'];
                        $album = $row['album'];
                        $artist = $row['artist'];
                        $genre = $row['genre'];
                        $image = $row['image'];
                        $date = $row['song_date'];
                        $audio = $row['audio'];
                        ?>
                         <tr>  
                        <td><?php echo $no ?></td>
                        <td><?php echo $song_title ?></td>
                        <td><?php echo $album ?></td>
                        <td><?php echo $artist ?></td>
                        <td><?php echo $genre ?></td>
                        <td><img class='img-responsive' width='100px' src='img/<?php echo $image ?>' alt=''></td>
                        <td><?php echo $date ?></td>

                        <td><?php echo $audio ?></td>

                        <td><a href='edit.php?song_id=<?php echo $id?>'class="btn btn-primary btn-sm mt-5"><i class="fa fa-edit"></i>Edit</a></td>
                        <td><a onclick="javascript: return confirm('Are You Sure You Want To Delete?');" href='songlist.php?delete=<?php echo $id ?>'class="btn btn-danger btn-sm mt-5"><i class="fa fa-trash"></i>Delete</a></td>
                        </tr>
                        <?php
                        $no=$no+1;          
                    }
                 ?>
                
            </tbody>
  </table>
  <div>


<?php 
    if(isset($_GET['delete'])){
        $id=$_GET['delete'];
        $query="DELETE FROM music WHERE id=$id";
        $res=mysqli_query($con,$query);
        if(!$res){
            die("Query Failed" . mysqli_error($res));
        }
        header('Location:songlist.php');
    }
 ?>

 



<?php include_once "include_admin/footer.php"; ?>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>
   $(document).ready( function () {
      $('#datatable').DataTable();
  } );
 </script>