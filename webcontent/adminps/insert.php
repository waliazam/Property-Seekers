<?php
include('dbconnect.php');

// php code to insert user data into database

if (isset($_POST['adduser'])) {
    
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $usertype = $_POST['usertype'];
    $userpicure = $_FILES['upic'];
    $userpictem = $_FILES["upic"]['tmp_name'];
    $userpicupload = "uploads/".$userpicure;

    $query = "INSERT INTO users(username, email, password, phone, address,usertype, userpic) VALUES(?,?,?,?,?,?,?)";
    $stmt= $con->prepare($query);
    $stmt->bind_param("sssssss", $name, $email, $password, $phone, $address, $usertype, $userpicupload);
    $stmt->execute();


    header('location:allusers.php');
    $_SESSION['response']= "Sucessfully added user";
    $_SESSION['res_type']="Sucess";
    move_uploaded_file($_FILES['upic']['tmp_name'], $userpicupload);
} ;     

// php code to insert house data into database

if (isset($_POST['addhouse'])) {
    
    $protype = $_POST['ptype'];
    $houseimage = $_FILES["housepic"]['name'];
    $tempimage = $_FILES["housepic"]['tmp_name'];
    $uploadimage = "uploads/".$houseimage;
    $location = $_POST['hlocation'];
    $hnumber = $_POST['housenumber'];
    $street = $_POST['hstreet'];
    $hblock = $_POST['hblock'];
    $hparkingspace = $_POST['hparkingspace'];
    $helectricmeter = $_POST['helectricmeter'];
    $hunits = $_POST['hunits'];
    $hbathrooms = $_POST['hbathrooms'];
    $hrooms = $_POST['hrooms'];
    $hkitchen = $_POST['hkitchen'];
    $hsize = $_POST['hsize'];
    $hdemand = $_POST['hdemand'];
    $hbuildyear = $_POST['hbuildyear'];
        if (isset($_POST['hparkface'])) {

           $hparkface = "Yes";
        } else {

          $hparkface = "No";
        };
        if (isset($_POST['southface'])) {

           $southface = "Yes";
        } else {

          $southface = "No";
        };
        if (isset($_POST['hboulevard'])) {

           $hboulevard = "Yes";
        } else {

          $hboulevard = "No";
        };
        if (isset($_POST['corner'])) {

           $corner = "Yes";
        } else {

          $corner = "No";
        };
        if (isset($_POST['deadend'])) {

           $deadend = "Yes";
        } else {

          $deadend = "No";
        };
        if (isset($_POST['serventroom'])) {

           $serventroom = "Yes";
        } else {

          $serventroom = "No";
        };
        if (isset($_POST['gasmeter'])) {

           $gasmeter = "Yes";
        } else {

          $gasmeter = "No";
        };
        if (isset($_POST['laundary'])) {

           $laundary = "Yes";
        } else {

          $laundary = "No";
        };
        if (isset($_POST['powderroom'])) {

           $powderroom = "Yes";
        } else {

          $powderroom = "No";
        };
        if (isset($_POST['basement'])) {

           $basement = "Yes";
        } else {

          $basement = "No";
        };
        if (isset($_POST['lawn'])) {

           $lawn = "Yes";
        } else {

          $lawn = "No";
        };
    $hfeatures = $_POST['hfeatures'];
    $hownername = $_POST['hownername'];
    $hownerphone = $_POST['hownerphone'];
    


    $query = "INSERT INTO houses(h_type, h_images, h_location, h_number, h_street, h_block, pspace, emeter, units, bathrooms, bedrooms, kitchen, size, demand, byear, pface, sface, boulevard, corner, stree, sroom, gasmet, laundry, proom, basement, lawn,  exfeature,  ownername, ownernum) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt= $con->prepare($query);
    $stmt->bind_param("sssssssssssssssssssssssssssss", $protype, $uploadimage, $location, $hnumber, $street, $hblock, $hparkingspace,$helectricmeter, $hunits, $hbathrooms, $hrooms, $hkitchen, $hsize, $hdemand, $hbuildyear, $hparkface, $southface, $hboulevard, $corner, $deadend, $serventroom, $gasmeter, $laundary, $powderroom, $basement, $lawn, $hfeatures, $hownername, $hownerphone);
    $stmt->execute();

    header('location:all-listing.php');
    $_SESSION['response']= "Sucessfully added user";
    $_SESSION['res_type']="Sucess";
    move_uploaded_file($_FILES['housepic']['tmp_name'], $uploadimage);
} ;

// Add appartment

if (isset($_POST['addappart'])) {
    
    $protype = $_POST['ptype'];
    $houseimage = $_FILES["housepic"]['name'];
    $tempimage = $_FILES["housepic"]['tmp_name'];
    $uploadimage = "uploads/".$houseimage;
    $location = $_POST['hlocation'];
    $hnumber = $_POST['housenumber'];
    $street = $_POST['hstreet'];
    $hblock = $_POST['hblock'];
    $hparkingspace = $_POST['hparkingspace'];
    $helectricmeter = $_POST['helectricmeter'];
    $hunits = $_POST['hunits'];
    $hbathrooms = $_POST['hbathrooms'];
    $hrooms = $_POST['hrooms'];
    $hkitchen = $_POST['hkitchen'];
    $hsize = $_POST['hsize'];
    $hdemand = $_POST['hdemand'];
    $hbuildyear = $_POST['hbuildyear'];
        if (isset($_POST['hparkface'])) {

           $hparkface = "Yes";
        } else {

          $hparkface = "No";
        };
        if (isset($_POST['southface'])) {

           $southface = "Yes";
        } else {

          $southface = "No";
        };
        if (isset($_POST['hboulevard'])) {

           $hboulevard = "Yes";
        } else {

          $hboulevard = "No";
        };
        if (isset($_POST['corner'])) {

           $corner = "Yes";
        } else {

          $corner = "No";
        };
        if (isset($_POST['deadend'])) {

           $deadend = "Yes";
        } else {

          $deadend = "No";
        };
        if (isset($_POST['serventroom'])) {

           $serventroom = "Yes";
        } else {

          $serventroom = "No";
        };
        if (isset($_POST['gasmeter'])) {

           $gasmeter = "Yes";
        } else {

          $gasmeter = "No";
        };
        if (isset($_POST['laundary'])) {

           $laundary = "Yes";
        } else {

          $laundary = "No";
        };
        if (isset($_POST['powderroom'])) {

           $powderroom = "Yes";
        } else {

          $powderroom = "No";
        };
        if (isset($_POST['basement'])) {

           $basement = "Yes";
        } else {

          $basement = "No";
        };
        if (isset($_POST['lawn'])) {

           $lawn = "Yes";
        } else {

          $lawn = "No";
        };
    $hfeatures = $_POST['hfeatures'];
    $hownername = $_POST['hownername'];
    $hownerphone = $_POST['hownerphone'];
    


    $query = "INSERT INTO houses(h_type, h_images, h_location, h_number, h_street, h_block, pspace, emeter, units, bathrooms, bedrooms, kitchen, size, demand, byear, pface, sface, boulevard, corner, stree, sroom, gasmet, laundry, proom, basement, lawn,  exfeature,  ownername, ownernum) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt= $con->prepare($query);
    $stmt->bind_param("sssssssssssssssssssssssssssss", $protype, $uploadimage, $location, $hnumber, $street, $hblock, $hparkingspace,$helectricmeter, $hunits, $hbathrooms, $hrooms, $hkitchen, $hsize, $hdemand, $hbuildyear, $hparkface, $southface, $hboulevard, $corner, $deadend, $serventroom, $gasmeter, $laundary, $powderroom, $basement, $lawn, $hfeatures, $hownername, $hownerphone);
    $stmt->execute();

    header('location:all-listing.php');
    $_SESSION['response']= "Sucessfully added user";
    $_SESSION['res_type']="Sucess";
    move_uploaded_file($_FILES['housepic']['tmp_name'], $uploadimage);
} ;

if (isset($_POST['addplot'])) {
    
    $protype = $_POST['plottype'];
    $plotimage = $_FILES["plotimage"]['name'];
    $tempimage = $_FILES["plotimage"]['tmp_name'];
    $uploadimage = "uploads/".$plotimage;
    $plotlocation = $_POST['plotlocation'];
    $plotno = $_POST['plotno'];
    $plotstreet = $_POST['plotstreet'];
    $plotblock = $_POST['plotblock'];
    $plotarea = $_POST['plotarea'];
    $plotdemand = $_POST['plotdemand'];
     if (isset($_POST['plotpf'])) {

           $plotpf = "Yes";
        } else {

          $plotpf = "No";
        };
        if (isset($_POST['plotsf'])) {

           $plotsf = "Yes";
        } else {

          $plotsf = "No";
        };
        if (isset($_POST['plodbld'])) {

           $plodbld = "Yes";
        } else {

          $plodbld = "No";
        };
        if (isset($_POST['plotstreetcorner'])) {

           $plotstreetcorner = "Yes";
        } else {

          $plotstreetcorner = "No";
        };
        if (isset($_POST['plotsde'])) {

           $plotsde = "Yes";
        } else {

          $plotsde = "No";
        };
        if (isset($_POST['plotel'])) {

           $plotel = "Yes";
        } else {

          $plotel = "No";
        };
        if (isset($_POST['plotpp'])) {

           $plotpp = "Yes";
        } else {

          $plotpp = "No";
        };
        if (isset($_POST['plotup'])) {

           $plotup = "Yes";
        } else {

          $plotup = "No";
        };
        $features = $_POST['features'];
        $ownername = $_POST['ownername'];
        $ownerphone = $_POST['ownerphone'];

        $query = "INSERT INTO houses(h_type, h_images, h_location, h_number, h_street, h_block, size, demand, pface, sface, boulevard, corner, stree,exfeature, extraland, ppaid, upaid ,  ownername, ownernum) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt= $con->prepare($query);
    $stmt->bind_param("sssssssssssssssssss", $protype, $uploadimage, $plotlocation, $plotno, $plotstreet, $plotblock, $plotarea, $plotdemand, $plotpf, $plotsf, $plodbld, $plotstreetcorner, $plotsde,$features, $plotel ,$plotpp ,$plotup, $ownername, $ownerphone);
    $stmt->execute();
    move_uploaded_file($_FILES['plotimage']['tmp_name'], $uploadimage);

    header('location:all-listing.php');
    $_SESSION['response']= "Sucessfully added user";
    $_SESSION['res_type']="Sucess";
    

  };

?>