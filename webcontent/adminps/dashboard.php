<?php 
session_start();
include 'dbconnect.php';
include 'action.php';
// $user_data = check_login($con);

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="title" content="Bahria Town Rawalpindi">
<meta name="description" content="Plots are avaliable for sale">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>
<body>
   <?php 
    include "particals/header.php";

    ?>
<?php 

include "dbconnect.php";
      $sql= "SELECT id FROM houses  WHERE h_type='Plot' ORDER BY id";
      $totalplots = $con->query($sql);


      $plots = mysqli_num_rows($totalplots);

      $sql= "SELECT id FROM houses  WHERE h_type='house' ORDER BY id";
      $totalhouses = $con->query($sql);


      $houses = mysqli_num_rows($totalhouses);

      $sql= "SELECT id FROM houses  WHERE h_type='building' ORDER BY id";
      $totalbuildings = $con->query($sql);


      $buildings = mysqli_num_rows($totalbuildings);

      $sql= "SELECT id FROM houses  WHERE h_type='shop' ORDER BY id";
      $totalshops = $con->query($sql);


      $shops = mysqli_num_rows($totalshops);

      $sql= "SELECT id FROM houses  WHERE h_type='appartments' ORDER BY id";
      $totalappartments = $con->query($sql);


      $appartments = mysqli_num_rows($totalappartments);

     
      $sql= "SELECT id FROM houses  WHERE h_type='Commercial Plot' ORDER BY id";
      $totalcplots = $con->query($sql);


      $cplots = mysqli_num_rows($totalcplots);


 ?>
<section id="dashboard">
  <div class="bg-layer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 style="color: #444">Listing Summery</h2>
      </div>
    </div>
    <div class="row">
      <!-- plots -->
      <div class="col-md-4">
             <a href="plotdetails.php" style="text-decoration: none;"> <div class="catagory">
              <div class="catagory-icon">
                <i class="fa fa-drafting-compass"></i>
              </div>
              <div class="catagory-heading">
                <h2>Plots</h2>
              </div>
              <div class="catagory-total">
                <h3><?= $plots ?></h3>
              </div>

              
            </a>
            </div>
    
    <!-- Commercial Plots -->
    </div>
      <div class="col-md-4">
              <a href="commercial_plots.php" style="text-decoration: none;"> <div class="catagory">
                <div class="catagory-icon">
                  <i class="fa fa-drafting-compass"></i>
                </div>
                <div class="catagory-heading">
                  <h2>Commercial Plots</h2>
                </div>
                <div class="catagory-total">
                  <h3><?= $cplots ?></h3>
                </div>
              </div>
              </a>
        </div>

        <!-- Houses -->
        <div class="col-md-4">
             <a href="housesdetails.php" style="text-decoration: none;">
              <div class="catagory">
              <div class="catagory-icon">
                <i class="fa fa-home"></i>
              </div>
              <div class="catagory-heading">
                <h2>Houses</h2>
              </div>
              <div class="catagory-total">
                <h3><?= $houses ?></h3>
              </div>
            </div>
            </a>
      </div>

      <!-- appatartments -->
      <div class="col-md-4">
            <div class="catagory">
              <div class="catagory-icon">
                <i class="fa fa-building"></i>
              </div>
              <div class="catagory-heading">
                <h2>Appartments</h2>
              </div>
              <div class="catagory-total">
                <h3><?= $buildings ?></h3>
              </div>
            </div>
      </div>
   
    <!-- Shops -->
    <div class="col-md-4">
           <a href="#" style="text-decoration: none;"> <div class="catagory">
              <div class="catagory-icon">
                <i class="fa fa-store-alt"></i>
              </div>
              <div class="catagory-heading">
                <h2>Shops</h2>
              </div>
              <div class="catagory-total">
                <h3><?= $shops ?></h3>
              </div>
            </div>

            </a>
      </div>
      
<!-- Appartments -->
      <div class="col-md-4">
            <div class="catagory">
              <div class="catagory-icon">
               <i class="fa fa-building"></i>
              </div>
              <div class="catagory-heading">
                <h2>Building</h2>
              </div>
              <div class="catagory-total">
                <h3><?= $appartments ?></h3>
              </div>
            </div>
      </div>
    </div>
    </div>
  </div>
</section>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>