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

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">

</head>
<body>
	<?php 
    include "particals/header.php";

    ?>
<section id="main-form">
  <div class="container">
  	<div class="col-md-12">
  		<form class="house-form">
		    <label>Property Type</label>
		    <input type="text" id="disabledInput" class="form-control" placeholder="Shop" disabled>
		    <br>
		    <label>Upload Images</label>
		    <input type="file">
		    <br><br>
			<label>Area</label>
			<div class="input-group">
		    <input type="text" class="form-control" id="inlineFormInputGroupUsername2">
		    <div class="input-group-prepend">
		      <div class="input-group-text">Marla</div>
		    </div>
		    </div>
		    <label>Block</label>
		    <input type="text" class="form-control">
		    <label>Location</label>
		    <input type="text" class="form-control">
		    <label>Extra Features</label>
		    <textarea type="textarea" rows="3" class="form-control"></textarea>
		    <label>Electric Meter</label>
		    <input type="text" class="form-control">
		    <label>Street</label>
		    <input type="text" class="form-control">
		    <label>Demand</label>
		    <div class="input-group">
		    <input type="text" class="form-control" id="inlineFormInputGroupUsername2">
		    <div class="input-group-prepend">
		      <div class="input-group-text">Lac</div>
		    </div>
		    </div>
		    <label>Build Year</label>
		    <input type="text" class="form-control">
		    <div class="form-row">
		    	<div class="col-md-4">
				    <input type="checkbox" name="Gas_meter">
				    <label for="inputState">Gas meter</label>
		    		
		    	</div>
		    	<div class="col-md-4">
				    <input type="checkbox" name="electric_meter">
				    <label for="inputState">Electric meter</label>
		    		
		    	</div>
		    </div>
		    <div class="form-row">
		    	<div class="col-md-4">
				    <input type="checkbox" name="store_room">
				    <label for="inputState">Store room</label>
		    	</div>
		    </div>
		    <button class="btn btn-dark">Submit Listing</button>
		</form>
  	</div>
  </div>
 </section>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>