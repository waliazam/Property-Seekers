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
<style type="text/css">
  @media (max-width: 767px) {
  .tbl-web{
      display: none;
}
}

@media (min-width: 767px) {
  .tbl-mbl{
      display: none;
}
}

.tbl-mbl td{
    
}

.btn{
  background-color: #eee;
  margin-bottom: 10px;
}

</style>
<section id="all-listing">
  <div class="containe">
  	<div class="col-sm-">
  		  <div class="col-sm2">
          
          <a href="plotdetails.php"><button class="btn btn-sucess"> Go Back</button></a>
        <img src="<?= $houseimage; ?>" class="img-responsive detail-image" width="100%">
          
        </div>
       <div class="col-md-">
                <table class="table table-dark table-bordered tbl-details tbl-web" id="table">
                  
                    <thead>
                        <th colspan="12" scope="col">
                           <h4>Main Features</h4>
                        </th>
                    </thead>
                    <tbody>
                      
                        <tr>
                            <th> Refrence &nbsp &nbsp <span> <?= $ptype . "-00" . $id; ?></span></th>
                            <th scope="row"><span><?= $ptype ?></span> Number &nbsp &nbsp <span><?= $hnumber; ?></span></th>
                        </tr>

                        <tr>
                            <th scope="row">Location &nbsp &nbsp <a href="<?= $location; ?>" target="_blank">Google Map</a></th>
                            <th scope="row">Street &nbsp &nbsp <span><?= $street; ?></span></th>
                        </tr>
                        <tr>
                            <th scope="row">Block  &nbsp &nbsp <span><?= $hblock; ?></span></th>
                            <th scope="row">Parking Space  &nbsp &nbsp <span><?= $hparkingspace; ?></span></th>
                        </tr>
                        <tr>
                            <th scope="row">Electric Meter &nbsp &nbsp <span><?= $helectricmeter; ?></span></th>
                            <th scope="row">Unit &nbsp &nbsp <span><?= $hunits; ?></span></th>
                        </tr>
                        <tr>
                            <th scope="row">Bathroom &nbsp &nbsp <span><?= $hbathrooms; ?></span></th>
                            <th scope="row">Kitchen &nbsp &nbsp <span><?= $hkitchen; ?></span></th>
                        </tr>
                        <tr>
                            <th scope="row">Size &nbsp &nbsp <span><?= $hsize; ?></span></th>
                            <th scope="row">Demand &nbsp &nbsp <span><?= $hdemand; ?></span></th>
                        </tr>
                        <tr>
                            <th scope="row">Build Year</span>
                             &nbsp &nbsp <span><?= $hbuildyear; ?></span></th>
                            <th scope="row">Park Face  &nbsp &nbsp <span><?= $hparkface; ?></span></th>
                        </tr>
                        <tr>
                            <th scope="row">South Face &nbsp &nbsp <span><?= $southface; ?></span></th>
                            <th scope="row">Boulevard &nbsp &nbsp <span><?= $hboulevard; ?></span></th>
                        </tr>
                        <tr>
                        </tr>
                        <tr>
                            <th scope="row">Corner &nbsp &nbsp <span><?= $corner; ?></span></th>
                            <th scope="row">Stree Dead End &nbsp &nbsp <span><?= $deadend; ?></span></th>
                        </tr>
                        <tr>
                        <th scope="row">Servent Room &nbsp &nbsp <span><?= $serventroom; ?></span></th>
                        <th scope="row">Servent Room &nbsp &nbsp <span><?= $serventroom; ?></span></th>
                        </tr>
                         <th colspan="12" scope="col">
                           <h4>Interior</h4>
                        </th>
                        <tr>
                            <th scope="row">Gas Mete &nbsp &nbsp <span><?= $gasmeter; ?></span></th>
                            <th scope="row">Laundary &nbsp &nbsp <span><?= $laundary; ?></span></th>
                        </tr>
                        <th colspan="12" scope="col">
                           <h4>EXTERIOR</h4>
                        </th>
                        <tr>
                            <th scope="row">Powder Room &nbsp &nbsp </span> <?= $powderroom; ?></span></th>
                            <th scope="row">Basement &nbsp &nbsp <span><?= $basement; ?></span></th>
                        </tr>
                        <tr>
                            <th scope="row">lawn &nbsp &nbsp <span><?= $lawn; ?></span></th>
                            <th scope="row">Extra Features &nbsp &nbsp <span><?= $hfeatures; ?></span></th>
                            
                        </tr>
                        <tr>
                            <th scope="row">Owner Name &nbsp &nbsp <span><?= $hownername; ?></span></th>
                            <th scope="row">Owner Number &nbsp &nbsp <span><?= $hownerphone; ?></span></th>
                            
                        </tr>
  

                    </tbody>
                </table>

              <table class="table table-dark tbl-mbl">
  <thead>
    <tr>
     <th colspan="12" scope="col">
        <h4>Main Features</h4>
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Refrence </th>
      <td><span> <?= $ptype . "-00" . $id; ?></span></td>
    </tr>
    <tr>
      <th scope="row">Number </th>
      <td scope="row"><span><?= $ptype ?> - <?= $hnumber; ?></span></td>
    </tr>

    <tr>
      <th scope="row">Location </th>
      <td scope="row"> <a href="<?= $location; ?>" target="_blank">View Directions</a></td>
      
    </tr>
    <tr>
      <th scope="row">Street </th>
      <td scope="row"> <span><?= $street; ?></span></td>
      
  
    </tr>

    <tr>
      <th scope="row">Block </th>
      <td scope="row"><span><?= $hblock; ?></span></td>
      
    </tr>
    <tr>
      <th scope="row">Size</th>
      <td scope="row"><span><?= $hsize; ?></span></td>
  
    </tr>
    <tr>
      <th scope="row">Demand</th>
      <td scope="row"><span><?= $hdemand; ?></span></td>
  
    </tr>
    <!-- check list -->
    <tr>
      <th scope="row">Park Face</th>
      <td scope="row"><span><?= $hparkface; ?></span></td>

    </tr>
    <tr>
      <th scope="row">South Face</th>
      <td scope="row"><span><?= $southface; ?></span></td>
     
  
    </tr>
    <tr>
      <th scope="row">Boulevard</th>
      <td scope="row"><span><?= $hboulevard; ?></span></td>
      
  
    </tr>
    <tr>
      <th scope="row">Street Corner</th>
      <td scope="row"> <span><?= $corner; ?></span></td>
        
    </tr>
    <tr>
      <th scope="row">Stree Dead End</th>
      <td scope="row"><span><?= $deadend; ?></span></td>
    </tr>
    <tr>
      <th scope="row">Extra Land</th>
      <td scope="row"><span><?= $plotel; ?></span></td>
  
    </tr>

    <tr>
      <th scope="row">Possession Paid</th>
      <td scope="row"><span><?= $pp; ?></span></td>
  
    </tr>
    <tr>
      <th scope="row">Utilites Paid</th>
      <td scope="row"><span><?= $up; ?></span></td>
  
    </tr>
    <tr>
      <!-- <th scope="row">Extra Features</th> -->
      <td scope="col" colspan="12"><span><?= $hfeatures; ?></span></td>
  
    </tr>
   <!--  <tr>
      <th scope="row">Owner Name</th>
      <td scope="row"><span><?= $hownername; ?></span></td>
  
    </tr>
    <tr>
      <th scope="row">Owner Number</th>
      <td scope="row"><span><?= $hownerphone; ?></span></td>
  
    </tr> -->
      
  </tbody>
</table>


            </div>
  </div>
  
 </section>


</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>