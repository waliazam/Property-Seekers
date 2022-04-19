<?php 
session_start();
include 'dbconnect.php';
include 'action.php';

// $user_data = check_login($con);

if($_SERVER['REQUEST_METHOD'] == "POST") {
 $user_name = $_POST['user_name'];
 $password = $_POST['password'];

 if(!empty($user_name) && !empty($password) && !is_numeric($user_name) ) {
   $query = " select * from users where username = '$user_name' limit 1";
   $result = mysqli_query($con, $query);

   if ($result) {
     if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            if ($user_data['password'] === $password) {
              $_SESSION['user_id'] = $user_data['user_id'];
             header("Location: index.php");
            die;
            }
        }
   }
   echo "Please enter correct data";
 }else
 {
  echo "Please enter correct data";
 }
}


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
  <style type="text/css">
    

    .login-form{
      margin-top: 100px;
      background-color: #eeeeee85;
      padding: 20px;
      box-shadow: 1px 2px 6px #999;
    }
    .login-form input{
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      font-size: 18px;
    }
  </style>
   
<section id="userform">
  <div class="container">
    <div class="col-sm-12 offset-sm-0 col-md-6 offset-md-3">
      <div  class="login-form">
        <img src="images/logo-removebg-preview.png">
      <!-- <h5>Login</h5> -->
      <form method="post">

        <input type="text" name="user_name"> 
        <input type="password" name="password"> 
        <input type="submit" name="submit" value="login" class="btn btn-success"> 

      </form>
        
      </div>
      
    </div>
  </div>
 </section>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>