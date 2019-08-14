<?php include_once "include_admin/header.php"; ?>

    <div id="wrapper">

        <!-- Navigation -->
<?php include_once "include_admin/navigation.php"; ?>
<?php include_once "include_admin/sidebar.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">
            
                <!-- Page Heading -->
                <div class="row">
                    
                <?php 
                    if (isset($_GET['source'])) {
                        $source = $_GET['source'];
                    }else{
                        $source = '';
                    }

                    switch ($source) {
                        case 'add_user':
                            include_once "include_admin/add_user.php";
                            break;  
                        case 'edit_user':
                             include_once "include_admin/edit_user.php";                  
                             break; 

                        case 'profile':
                            include_once "include_admin/profile.php";
                            break;                      

                         default;
                         include_once "include_admin/view_all_users.php";               
                    }
                ?>
                </div>

                <!-- /.row -->
<?php include_once "include_admin/footer.php"; ?>