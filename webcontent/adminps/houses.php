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
  		<form class="house-form" action="insert.php" method="post" enctype="multipart/form-data">
		    <label>Property Type</label>
		    <input type="text" name="ptype" class="form-control" placeholder="House" value="House" readonly>
		    <br>
		    <label>Images</label>
		    <input type="file" name="housepic" class="form-control" required>
		    <br><br>
			<label>Location</label>
		    <input type="text" name="hlocation" class="form-control" required>
			<label>House Number</label>
		    <input type="text" name="housenumber" class="form-control" required>

			<label>Street</label>
		    <input type="text" name="hstreet" class="form-control" required>
			<label>Block</label>
		    <input type="text" name="hblock" class="form-control" required>
			<div class="form-group">
                  <label>Parking Space</label>
                  
                    <select class="form-control" name="hparkingspace">
						<option value="" selected>Select</option>
                        <option value="1">1 Car</option>
                        <option value="2">2 Cars</option>
                        <option value="3">3 Cars</option>
						<option value="4">4 Cars</option>
                        <option value="5">5 Cars</option>
                    </select>
			</div>
			<div class="form-group">
                    <label>Electric Meter</label>
                  
                    <select class="form-control" name="helectricmeter">
						<option value="" selected>Select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
			</div>

			<div class="form-group">
                    <label>Units</label>
                  
                    <select class="form-control" name="hunits">
						<option value="" selected>Select</option>
                        <option value="1">Single Unit</option>
                        <option value="2">Double Unit</option>
                    </select>
			</div>
			<label>Bathrooms</label>
		    <input type="text" name="hbathrooms" class="form-control" required>
		    <label>Bedrooms</label>
		    <input type="text" name="hrooms" class="form-control" required>
		    <div class="form-group">
                    <label>Kitchen</label>
                  
                    <select class="form-control" name="hkitchen">
						<option value="" selected>Select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
			</div>
		    <label>Size</label>
		    <div class="input-group">
		    <input type="text" name="hsize" class="form-control" id="inlineFormInputGroupUsername2" required>
		    <div class="input-group-prepend">
		      <div class="input-group-text">Marla</div>
		    </div>
		    </div>
		    
		    <label>Demand</label>
		    <div class="input-group">
		    <input type="text" name="hdemand" class="form-control" id="inlineFormInputGroupUserid2">
		    <div class="input-group-prepend">
		      <div class="input-group-text">Lac</div>
		    </div>
		    </div>
			
		    <label>Build Year</label>
		    <input type="text" name="hbuildyear" class="form-control">
		    
		    <div class="form-row">
		    	<div class="col-md-4">
				    <input type="checkbox" value="Park Face" name="hparkface">
				    <label for="inputState">Park Face </label>
		    	</div>
		    	<div class="col-md-4">
				    <input type="checkbox" value="South Face" name="southface">
				    <label for="inputState">South Face</label>
		    		
		    	</div>
		    	<div class="col-md-4">
				    <input type="checkbox" value="Boulevard" name="hboulevard">
				    <label for="inputState">Boulevard</label>
		    		
		    	</div>
		    </div>
		    <div class="form-row">
		    	<div class="col-md-4">
				    <input type="checkbox" value="Corner" name="corner">
				    <label for="inputState">Corner</label>
		    		
		    	</div>
		    	<div class="col-md-4">
				    <input type="checkbox" value="Stree Dead End" name="deadend">
				    <label for="inputState">Stree Dead End</label>
		    		
		    	</div>
		    	<div class="col-md-4">
				    <input type="checkbox" value="Servent Room" name="serventroom">
				    <label for="inputState">Servent Room</label>
		    		
		    	</div>
		    </div>

		    <div class="form-row">
		    	<div class="col-md-4">
				    <input type="checkbox" value="Gas Meter" name="gasmeter">
				    <label for="inputState">Gas Meter</label>
		    		
		    	</div>
		    	<div class="col-md-4">
				    <input type="checkbox" value="Laundary" name="laundary">
				    <label for="inputState">Laundary</label>
		    		
		    	</div>
		    	<div class="col-md-4">
				    <input type="checkbox" value="Powder Room" name="powderroom">
				    <label for="inputState">Powder Room</label>
		    		
		    	</div>
				<div class="col-md-4">
				    <input type="checkbox" value="Basement" name="basement">
				    <label for="inputState">Basement</label>
		    		
		    	</div>
				<div class="col-md-4">
				    <input type="checkbox" value="lawn" name="lawn">
				    <label for="inputState">lawn</label>
		    		
		    	</div>
		    </div>
			<br>
			<label>Extra Features</label>
		    <textarea type="textarea" rows="3" name="hfeatures" class="form-control"></textarea>
			<label>Owner Name</label>
		    <input type="text" name="hownername"  class="form-control" required>
		    <label>Owner Number</label>
		    <input type="text" name="hownerphone" class="form-control" required>

		    <button class="btn btn-dark" name="addhouse">Submit Listing</button>

			
		</form>
  	</div>
  </div>
 </section>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="allscript.js"></script>
</html>