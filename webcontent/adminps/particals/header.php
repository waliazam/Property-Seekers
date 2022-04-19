<?php 
// include 'dbconnect.php';

  // $usertype = 'usertype';
 ?>
 <section id="header">
  <div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-light" >
  <a class="navbar-brand" href="#">
    <img src="images/logo-removebg-preview.png" width="250px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <?php 
       $type = ['usertype'];

      if($type==1){?>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Manage Users
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="users.php">Add New User</a>
          <a class="dropdown-item" href="allusers.php">All Users</a>

        </div>
      </li>

      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Add New Listing
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="houses.php">House</a>
          <a class="dropdown-item" href="plot.php">Plot</a>
          <a class="dropdown-item" href="commercialplots.php">Commercial Plot</a>
          <a class="dropdown-item" href="appartments.php">Appartment</a>
          <a class="dropdown-item" href="shops.php">Shop</a>
          <a class="dropdown-item" href="buildings.php">Building</a>
        </div>
      </li>

    <?php } ?>

    <?php 
       $type = ['usertype'];

      if($type==1){?>
      <li class="nav-item">
        <a class="nav-link" href="all-listing.php">All Listing</a>
      </li>

      <?php } ?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="all-listing.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Catagories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="housesdetails.php">House</a>
          <a class="dropdown-item" href="plotdetails.php">Plot</a>
          <a class="dropdown-item" href="commercial_plots.php">Commercial Plots</a>
          <!-- <a class="dropdown-item" href="appartments.php">Appartment</a>
          <a class="dropdown-item" href="shops.php">Shop</a>
          <a class="dropdown-item" href="buildings.php">Building</a> -->
        </div>
      </li>
      <?php 
       $type = ['usertype'];

      if($type==1 || $type==2){?>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
        <?php } ?>

        <?php 
       $type = ['usertype'];

      if(empty($type)){?>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
        <?php } ?>
        
    </ul>
  </div>
</nav>
</div>
</section>