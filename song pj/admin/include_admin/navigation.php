<?php session_start(); ?>
<style>
  .logo{
    display: inline;
    float: left;
    position: relative;
    bottom: 7px;

  }
  span.logo_small{
    color: #fff!important;
    position: relative;
  }
</style>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><img src="img/Music Teacher.jpg" class="logo"  width="50px;"><span class="logo_small">Music World</span><!-- Admin --></a>
        <ul class="user-menu">
          <a href="../index.php" style="margin-right: 20px;"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg>Home</a>
          <li class="dropdown pull-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo $_SESSION['username']; ?> <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="users.php?source=profile"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
              <!-- <li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li> -->
              <li><a class="dropdown-item" href="include_admin/logout.php" data-toggle="modal">
                  <!-- <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i> --><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg>
                  Logout
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
              
    </div><!-- /.container-fluid -->


  </nav>