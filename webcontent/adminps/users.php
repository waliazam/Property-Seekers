<?php 
session_start();
include 'dbconnect.php';
include 'action.php';

 ?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">

</head>
<body>
  <?php 
    include "particals/header.php";

    ?>
<section id="userform">
  <div class="container">
    <div class="col-sm-12 offset-sm-0 col-md-8 offset-md-2">
     
      <form class="user-form" action="insert.php" method="post" enctype="enctype=multipart/form-data">
        <div class="form-row">
          <div class="col">
            <label>Full Name</label>
            <input type="text" name="username" id="fullnameid" class="form-control">
          </div>
          <div class="col">
            <label>Email</label>
            <input type="email" name="email" id="emailid" class="form-control">
            
          </div>
        </div>

        <div class="form-row">
          <div class="col">
            <label>Password</label>
            <input type="password" name="password" id="locationid" class="form-control">
            
          </div>
          <div class="col">
            <label>Mobile Number</label>
            <input type="text" name="phone" id="phoneid" class="form-control">
            
          </div>
        </div>
        <label>Address</label>
        <input type="text" name="address" id="addressid" class="form-control">
        <label>User Type</label>
        <select class="form-control" name="usertype">
                <option  value="1">Admin</option>
                <option value="2">Modrator</option>
                <option value="3">User</option>
            </select>
        <br>
        <label>Upload Profile Picture</label>
        <input type="file" name="upic">
        <br><br>
        <button class="btn btn-dark" name="adduser">Add User</button>
        
    </form>
    </div>
  </div>
 </section>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>