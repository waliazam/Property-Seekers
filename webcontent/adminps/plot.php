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

</head>
<body>
	<?php 
    include "particals/header.php";

    ?>

<section id="main-form">
  <div class="container">
  	<div class="col-md-12">
  		<form class="house-form" action="insert.php" method="post" enctype="multipart/form-data">
		    <label>Property Type</label>
		    <input type="text" id="disabledInput" name="plottype" value="Plot" class="form-control" placeholder="Plot" readonly>
		    <br>
		    <label>Upload Images</label>
		    <input type="file" name="plotimage" multiple>
		    <br><br>
        <label>Location</label>
		    <input type="text" name="plotlocation" class="form-control">
        <label>Plot Number</label>
		    <input type="text" name="plotno" class="form-control">
        <label>Street</label>
		    <input type="text" name="plotstreet" class="form-control">
        <label>Block</label>
		    <input type="text"  name="plotblock" class="form-control" maxlength="7">
		  <div class="form-group">
                  <label>Area</label>
                  
                    <select class="form-control" name="plotarea">
						<option value="" selected>Select Marla</option>
                        <option value="5">5 Marla</option>
                        <option value="7">7 Marla</option>
                        <option value="10">10 Marla</option>
						<option value="20">1 Kanal</option>
                    </select>
			</div>
        
		    <label>Demand</label>
		    <div class="input-group">
        <input type="text" class="form-control" name="plotdemand" id="inlineFormInputGroupUsername2">
        <div class="input-group-prepend">
          <div class="input-group-text">Lac</div>
        </div>
        </div>
        <div class="form-row">
		    	<div class="col-md-4">
				    <input type="checkbox" name="plotpf" id="parkface">
				    <label for="inputState">Park Face </label>
		    	</div>
		    	<div class="col-md-4">
				    <input type="checkbox" name="plotsf" id="southface">
				    <label for="inputState">South Face</label>
		    		
		    	</div>
		    	<div class="col-md-4">
				    <input type="checkbox" name="plodbld" id="boulevard">
				    <label for="inputState">Boulevard</label>
		    		
		    	</div>
		    </div>
        <div class="form-row">
		    	<!-- <div class="col-md-4">
				    <input type="checkbox" name="plotcorner" id="corner">
				    <label for="inputState">Corner </label>
		    	</div> -->
		    	<div class="col-md-4">
				    <input type="checkbox" name="plotstreetcorner" id="street">
				    <label for="inputState">Street Corner</label>
		    		
		    	</div>
		    	<div class="col-md-4">
				    <input type="checkbox" name="plotsde" id="sde">
				    <label for="inputState">Street Dead End</label>
		    		
		    	</div>
		    </div>
        <div class="form-row">
		    	<div class="col-md-4">
				    <input type="checkbox" name="plotel" id="el">
				    <label for="inputState">Extra Land </label>
		    	</div>
		    	<div class="col-md-4">
				    <input type="checkbox" name="plotpp" id="pp">
				    <label for="inputState">Possession Paid</label>
		    		
		    	</div>
		    	<div class="col-md-4">
				    <input type="checkbox" name="plotup" id="up">
				    <label for="inputState">Utilites Paid</label>
		    		
		    	</div>
		    </div>
		    <label>Extra Features</label>
		    <textarea type="textarea" rows="3" name="features" class="form-control"></textarea>
			<label>Owner Name</label>
		    <input type="text" name="ownername"  class="form-control">
		    <label>Owner Number</label>
		    <input type="text" name="ownerphone" class="form-control">
        
		    <button class="btn btn-dark" name="addplot">Submit Listing</button>
		</form>
  	</div>
  </div>
 </section>
</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>