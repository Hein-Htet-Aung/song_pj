                    <?php ob_start(); ?>
                    <?php include_once "../include/db.php"; ?>
                    <?php include_once "navigation.php"; ?>
                    <?php //include_once "sidebar.php"; ?>
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
                                    <th>No</th>
                                    <th>User Name</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $query ="SELECT * FROM users";
                                $result = mysqli_query($con,$query);
                                while ($row=mysqli_fetch_assoc($result)) {
                                    $user_id = $row['user_id'];
                                    $username = $row['username'];
                                    $user_password = $row['user_password'];
                                    $user_firstname = $row['user_firstname'];
                                    $user_lastname = $row['user_lastname'];
                                    $user_email = $row['user_email'];
                                    $user_role = $row['user_role'];
                                    echo "<tr>";
                                    echo "<td>$user_id</td>";
                                    echo "<td>$username</td>";
                                    echo "<td>$user_firstname</td>";
                                    echo "<td>$user_lastname</td>";
                                    echo "<td>$user_email</td>";
                                    echo "<td>$user_role</td>";

                                    // echo "<td><a href='users.php?admin=$user_id'>Admin</a></td>";
                                    // echo "<td><a href='users.php?subscriber=$user_id'>Subscriber</a></td>";
                                     echo "<td><a href='users.php?source=edit_user&edit=$user_id' class='btn btn-primary btn-sm mt-5'><i class='fa fa-edit'>Edit</i></a></td>";
                                     echo "<td><a onclick=\"javascript:return confirm('Are You Sure Want To Delete');\" href='users.php?delete=$user_id' class='btn btn-danger btn-sm mt-5'><i class='fa fa-trash'>Delete</i></a></td>";
                                    echo "</tr>";
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
<?php 
    if (isset($_GET['delete'])) {
        $delete_user_id = mysqli_real_escape_string($con,$_GET['delete']);
        $query = "DELETE FROM users WHERE user_id=$delete_user_id";
        $result = mysqli_query($con,$query);
        if (!$result) {
            die("Query Failed." . mysqli_error($result));
        }
        header('Location:users.php');
    }
    ?>
