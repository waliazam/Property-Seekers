<?php 
session_start();
include 'dbconnect.php';
include 'action.php';
$user_data = check_login($con);
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
<section id="all-users">
  <div class="container">
    <div class="col-sm-12">
    <h3>All Users</h3>
  <table class="table table-bordered">
  <thead>
    <tr>
    <th scope="col">Profile Picture</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">User Type</th>
      <th scope="col">View</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
   
<?php
  include 'dbconnect.php';
  $sql = "SELECT * FROM users";
  $result = $con->query($sql);
  

      // output data of each row
      while($row = $result->fetch_assoc()) {?>
       <tr>
          <td><img src="<?= $row['userpic']; ?>" width="55" alt="Profile Picture"></td>
          <td><?= $row['username']; ?></td>
          <td><?= $row['email']; ?></td>
          <td><?= $row['phone']; ?></td>
          <td><?= $row['usertype']; ?></td>
          <td><a href="#"><i class="far fa-eye icon-center"></i></a></td>
          <td><a href="#"><i class="far fa-edit icon-center"></i></a></td>
          <td><a href="action.php?delete_user=<?=$row['id']; ?>"><i class="far fa-trash-alt icon-center"></i></a></td>
      </tr>
      <?php  } ?>

  <?php
  $con->close();
  ?>

    
  </tbody>
</table>
<div class="row">
    <div class="col-md-12">
      <nav aria-label="Page navigation example" >
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
    </div>
  </div>
  </div>
  
 </section>


</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>