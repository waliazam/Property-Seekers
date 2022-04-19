<?php 
session_start();
include '../adminps/dbconnect.php';
include '../adminps/action.php';
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
<style type="text/css">
	.table-bordered .block-cl {
    width: 10px !important;
}

.table-bordered .number-cl {
    width: 150px !important;
}

.table-bordered .demand-cl {
    width: 150px !important;
}

.table-bordered .featres-cl {
    width: 560px !important;
}
.table-bordered {
    width:1100px;
}
.styled-table .featres-cl {
    width: 560px !important;
}
.styled-table {
    /*border-collapse: collapse !important;*/
    margin: 25px 0;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    width:1100px;
    /*border-radius: 20px 20px 0 0 !important;*/
}
.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    /*padding: 12px 15px;*/
    font-weight: 400;

}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
.view-col{
  width: 50px;
  }
	.table-bordered thead th {
    border-bottom-width: 2px;
    font-weight: 500;
    /*background: #868bb0;*/
    /*color: white;*/
}

}

.container{
  /*overflow-y: scroll;*/
    overflow-x: scroll;
}

#all-listing a{
  text-decoration: none;
}

@media(max-width: 767px){
.mobile-section{
  display: none;
}

}

@media(min-width: 767px){
  .desktop-section{
    display: none;
  }
}

.ml20{
  margin-left: 15px;
}
</style>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
	<a href="index.php"><button>Back to Home</button></a>

      </div>
    </div>
  </div>
</section>
<section id="all-listing" class="desktop-section">
  <div class="contanr">
  	<div class="col-s">
    <a href="index.php"><button>Back to Home</button></a>

  		<hr>
  		<h4 class="ml20">5 Marla</h4>
  <table class="table styled-table table-bordered">
  <thead>
   
      <tr>
      <!-- <th scope="col">Ref</th> -->
      <th scope="col" width="120px;">Block</th>
      <th scope="col" width="90px;">Plot No</th>
      <th scope="col" width="85px;">Demand</th>
      <th scope="col">Details</th>
      <th scope="col" width="90px;">View</th>
      <th scope="col" width="90px;">Edit</th>
      <th scope="col" width="90px;">Delete mf</th>
  
      <!-- <th scope="col">Delete</th> -->
    </tr>

  </thead>
  <tbody>
    <?php 
      $sql= "SELECT * FROM houses WHERE h_type = 'Plot' AND size='5'";
      $result = $con->query($sql);

       while($row = $result->fetch_assoc()) {?>
        <tr onclick="window.location='listingdetail.php?details=<?=$row['id']; ?>';"; style="cursor: pointer; ">
      <!-- <th scope="row">Pl-40<?= $row['id']; ?></th> -->
      <td><?= $row['h_block']; ?></td>
      <td><?= $row['h_number']; ?> </td>
      <td><?= $row['demand']; ?></td>
      <td><?= $row['exfeature'];?></td>
      

      
      <td class="view-col"><a href="listingdetail.php?details=<?=$row['id']; ?>"><i class="far fa-eye icon-center"></i></a></td>
      <td><a href="#"><i class="far fa-edit icon-center"></i></a></td>
      <td><a href="action.php?delete_plot=<?=$row['id']; ?>"><i class="far fa-trash-alt icon-center" onclick="return confirm('Are you sure? Do you want to delete this record?');"></i></a></td>
    </tr>
     
    <?php } ?>
  </tbody>
</table>
	<!-- 7 Marla -->

		<h4 class="ml20">7 Marla</h4>
  <table class="table styled-table table-bordered">
  <thead>
  <tr>
      <!-- <th scope="col">Ref</th> -->
     <th scope="col" width="120px;">Block</th>
      <th scope="col" width="90px;">Plot No</th>
      <th scope="col" width="85px;">Demand</th>
      <th scope="col">Details</th>
      <th scope="col" width="90px;">View</th>
      <th scope="col" width="90px;">Edit</th>
      <th scope="col" width="90px;">Delete</th>
      <!-- <th scope="col">Delete</th> -->
    </tr>
  </thead>
  <tbody>
    <?php 
      $sql= "SELECT * FROM houses WHERE h_type = 'Plot' AND size='7'";
      $result = $con->query($sql);

       while($row = $result->fetch_assoc()) {?>
        <tr onclick="window.location='listingdetail.php?details=<?=$row['id']; ?>';"; style="cursor: pointer; ">
     <td><?= $row['h_block']; ?></td>
      <td><?= $row['h_number']; ?> </td>
      <!-- <td><?= $row['size']; ?> <span>Marla</span></td> -->
      <td><?= $row['demand']; ?></td>
      <td><?= $row['exfeature']; ?></td>
      


      
      <td class="view-col"><a href="listingdetail.php?details=<?=$row['id']; ?>"><i class="far fa-eye icon-center"></i></a></td>
      <td><a href="#"><i class="far fa-edit icon-center"></i></a></td>
      <td><a href="action.php?delete_plot=<?=$row['id']; ?>"><i class="far fa-trash-alt icon-center" onclick="return confirm('Are you sure? Do you want to delete this record?');"></i></a></td>
    </tr>
     
    <?php } ?>
  </tbody>
</table>

<!-- 7 marla end -->

<!-- 10 Marla -->

		<h4 class="ml20">10 Marla</h4>
  <table class="table styled-table table-bordered">
  <thead>
  <tr>
      <!-- <th scope="col">Ref</th> -->
     <th scope="col" width="120px;">Block</th>
      <th scope="col" width="90px;">Plot No</th>
      <th scope="col" width="85px;">Demand</th>
      <th scope="col">Details</th>
      <th scope="col" width="90px;">View</th>
      <th scope="col" width="90px;">Edit</th>
      <th scope="col" width="90px;">Delete</th>
      
      <!-- <th scope="col">Delete</th> -->
    </tr>
  </thead>
  <tbody>
    <?php
      $sql= "SELECT * FROM houses WHERE h_type = 'Plot' AND size='10'";
      $result = $con->query($sql);

       while($row = $result->fetch_assoc()) {?>
       <tr onclick="window.location='listingdetail.php?details=<?=$row['id']; ?>';"; style="cursor: pointer; ">
      <!-- <th scope="row">Pl-40<?= $row['id']; ?></th> -->
      <td><?= $row['h_block']; ?></td>
      <td><?= $row['h_number']; ?> </td>
      <!-- <td><?= $row['size']; ?> <span>Marla</span></td> -->
      <td><?= $row['demand']; ?></td>
      <td><?= $row['exfeature']; ?></td>
      

      
      
      <td class="view-col"><a href="listingdetail.php?details=<?=$row['id']; ?>"><i class="far fa-eye icon-center"></i></a></td>
      <td><a href="#"><i class="far fa-edit icon-center"></i></a></td>
      <td><a href="action.php?delete_plot=<?=$row['id']; ?>"><i class="far fa-trash-alt icon-center" onclick="return confirm('Are you sure? Do you want to delete this record?');"></i></a></td>
    </tr>
     
    <?php } ?>
  </tbody>
</table>

<!-- 10 marla end -->


<!-- 1 Marla Kanal -->

		<h4 class="ml20">1 Kanal</h4>
  <table class="table styled-table table-bordered">
  <thead>
  <tr>
      <!-- <th scope="col">Ref</th> -->
     <th scope="col" width="120px;">Block</th>
      <th scope="col" width="90px;">Plot No</th>
      <th scope="col" width="85px;">Demand</th>
      <th scope="col">Details</th>
      <th scope="col" width="90px;">View</th>
      <th scope="col" width="90px;">Edit</th>
      <th scope="col" width="90px;">Edit</th>
      <!-- <th scope="col">Delete</th> -->
    </tr>
  </thead>
  <tbody>
    <?php 
      $sql= "SELECT * FROM houses WHERE h_type = 'Plot' AND size='20'";
      $result = $con->query($sql);

       while($row = $result->fetch_assoc()) {?>
       <tr onclick="window.location='listingdetail.php?details=<?=$row['id']; ?>';"; style="cursor: pointer; ">
      <!-- <th scope="row">Pl-40<?= $row['id']; ?></th> -->
      <td><?= $row['h_block']; ?></td>
      <td><?= $row['h_number']; ?> </td>
      <!-- <td><?= $row['size']; ?> <span>Marla</span></td> -->
      <td><?= $row['demand']; ?></td>
      <td><?= $row['exfeature']; ?></td>

      
      
      <td class="view-col"><a href="listingdetail.php?details=<?=$row['id']; ?>"><i class="far fa-eye icon-center"></i></a></td>
      <td><a href="#"><i class="far fa-edit icon-center"></i></a></td>
      <td><a href="action.php?delete_plot=<?=$row['id']; ?>"><i class="far fa-trash-alt icon-center" onclick="return confirm('Are you sure? Do you want to delete this record?');"></i></a></td>
    </tr>
     
    <?php } ?>
  </tbody>
</table>

<!-- 1 Kanal end -->



  </div>
  
 </section>

 <!-- mobile section -->

 </style>
<section id="all-listing" class="mobile-section">
  <div class="container">
    <div class="col-sm-12">
      <h3 class="ml20">Plots Summery</h3>
      <hr>
      <h4 class="ml20">5 Marla t</h4>
  <table class="table styled-table table-bordered">
  <thead>
   
  <tr>
      <!-- <th scope="col">Ref</th> -->
     <th scope="col" width="120px;">Block</th>
      <th scope="col" width="90px;">Plot No</th>
      <th scope="col" width="85px;">Demand</th>
      <th scope="col">Details</th>
      <th scope="col" width="90px;">View</th>
      <th scope="col" width="90px;">Edit</th>
      <th scope="col" width="90px;">Delete</th>
      <!-- <th scope="col">Delete</th> -->
    </tr>

  </thead>
  <tbody>
    <?php 
    
      $sql= "SELECT * FROM houses WHERE h_type = 'Plot' AND size='5'";
      $result = $con->query($sql);

       while($row = $result->fetch_assoc()) {?>
        <tr onclick="window.location='listingdetail.php?details=<?=$row['id']; ?>';"; style="cursor: pointer; ">
      <!-- <th scope="row">Pl-40<?= $row['id']; ?></th> -->
      <td><?= $row['h_block']; ?></td>
      <td><?= $row['h_number']; ?> </td>
      <td><?= $row['demand']; ?></td>
      <td><?= $row['exfeature']; ?></td>
      

      
      <td class="view-col"><a href="listingdetail.php?details=<?=$row['id']; ?>"><i class="far fa-eye icon-center"></i></a></td>
      <td><a href="#"><i class="far fa-edit icon-center"></i></a></td>
      <td><a href="action.php?delete_plot=<?=$row['id']; ?>"><i class="far fa-trash-alt icon-center" onclick="return confirm('Are you sure? Do you want to delete this record?');"></i></a></td>
    </tr>
     
    <?php } ?>
  </tbody>
</table>
  <!-- 7 Marla -->

    <h4 class="ml20">7 Marla</h4>
  <table class="table styled-table table-bordered">
  <thead>
  <tr>
      <!-- <th scope="col">Ref</th> -->
     <th scope="col" width="120px;">Block</th>
      <th scope="col" width="90px;">Plot No</th>
      <th scope="col" width="85px;">Demand</th>
      <th scope="col">Details</th>
      <th scope="col" width="90px;">View</th>
      <th scope="col" width="90px;">Edit</th>
      <th scope="col" width="90px;">Delete</th>
      <!-- <th scope="col">Delete</th> -->
    </tr>
  </thead>
  <tbody>
    <?php 
      $sql= "SELECT * FROM houses WHERE h_type = 'Plot' AND size='7'";
      $result = $con->query($sql);

       while($row = $result->fetch_assoc()) {?>
        <tr onclick="window.location='listingdetail.php?details=<?=$row['id']; ?>';"; style="cursor: pointer; ">
     <td><?= $row['h_block']; ?></td>
      <td><?= $row['h_number']; ?> </td>
      <!-- <td><?= $row['size']; ?> <span>Marla</span></td> -->
      <td><?= $row['demand']; ?></td>
      <td><?= $row['exfeature']; ?></td>
      


      
      <td class="view-col"><a href="listingdetail.php?details=<?=$row['id']; ?>"><i class="far fa-eye icon-center"></i></a></td>
      <td><a href="#"><i class="far fa-edit icon-center"></i></a></td>
      <td><a href="action.php?delete_plot=<?=$row['id']; ?>"><i class="far fa-trash-alt icon-center" onclick="return confirm('Are you sure? Do you want to delete this record?');"></i></a></td>
    </tr>
     
    <?php } ?>
  </tbody>
</table>

<!-- 7 marla end -->

<!-- 10 Marla -->

    <h4 class="ml20">10 Marla</h4>
  <table class="table styled-table table-bordered">
  <thead>
  <tr>
      <!-- <th scope="col">Ref</th> -->
     <th scope="col" width="120px;">Block</th>
      <th scope="col" width="90px;">Plot No</th>
      <th scope="col" width="85px;">Demand</th>
      <th scope="col">Details</th>
      <th scope="col" width="90px;">View</th>
      <th scope="col" width="90px;">Edit</th>
      <th scope="col" width="90px;">Delete</th>
      <!-- <th scope="col">Edit</th> -->
      <!-- <th scope="col">Delete</th> -->
    </tr>
  </thead>
  <tbody>
    <?php 
      $sql= "SELECT * FROM houses WHERE h_type = 'Plot' AND size='10'";
      $result = $con->query($sql);

       while($row = $result->fetch_assoc()) {?>
       <tr onclick="window.location='listingdetail.php?details=<?=$row['id']; ?>';"; style="cursor: pointer; ">
      <!-- <th scope="row">Pl-40<?= $row['id']; ?></th> -->
      <td><?= $row['h_block']; ?></td>
      <td><?= $row['h_number']; ?> </td>
      <!-- <td><?= $row['size']; ?> <span>Marla</span></td> -->
      <td><?= $row['demand']; ?></td>
      <td><?= $row['exfeature']; ?></td>
      

      
      
      <td class="view-col"><a href="listingdetail.php?details=<?=$row['id']; ?>"><i class="far fa-eye icon-center"></i></a></td>
      <td><a href="#"><i class="far fa-edit icon-center"></i></a></td>
      <td><a href="action.php?delete_plot=<?=$row['id']; ?>"><i class="far fa-trash-alt icon-center" onclick="return confirm('Are you sure? Do you want to delete this record?');"></i></a></td>
    </tr>
     
    <?php } ?>
  </tbody>
</table>

<!-- 10 marla end -->


<!-- 1 Marla Kanal -->

    <h4 class="ml20">1 Kanal</h4>
  <table class="table styled-table table-bordered">
  <thead>
   <tr>
      <!-- <th scope="col">Ref</th> -->
    <th scope="col" width="120px;">Block</th>
      <th scope="col" width="90px;">Plot No</th>
      <th scope="col" width="85px;">Demand</th>
      <th scope="col">Details</th>
      <th scope="col" width="90px;">View</th>
      <th scope="col" width="90px;">Edit</th>
      <th scope="col" width="90px;">Delete</th>
      <!-- <th scope="col">Edit</th> -->
      <!-- <th scope="col">Delete</th> -->
    </tr>
  </thead>
  <tbody>
    <?php 
      $sql= "SELECT * FROM houses WHERE h_type = 'Plot' AND size='20'";
      $result = $con->query($sql);

       while($row = $result->fetch_assoc()) {?>
       <tr onclick="window.location='listingdetail.php?details=<?=$row['id']; ?>';"; style="cursor: pointer; ">
      <!-- <th scope="row">Pl-40<?= $row['id']; ?></th> -->
      <td><?= $row['h_block']; ?></td>
      <td><?= $row['h_number']; ?> </td>
      <!-- <td><?= $row['size']; ?> <span>Marla</span></td> -->
      <td><?= $row['demand']; ?></td>
      <td><?= $row['exfeature']; ?></td>

      
      
      <td class="view-col"><a href="listingdetail.php?details=<?=$row['id']; ?>"><i class="far fa-eye icon-center"></i></a></td>
      <td><a href="#"><i class="far fa-edit icon-center"></i></a></td>
      <td><a href="action.php?delete_plot=<?=$row['id']; ?>"><i class="far fa-trash-alt icon-center" onclick="return confirm('Are you sure? Do you want to delete this record?');"></i></a></td>
    </tr>
     
    <?php } ?>
  </tbody>
</table>

<!-- 1 Kanal end -->



  </div>
  
 </section>


</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>