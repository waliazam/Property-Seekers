<?php
include('../dbconnect.php');

// php code to insert house data into database

if (isset($_POST['addappartment'])) {
    
    $ptype = $_POST['ptype'];
    $himage = $_FILES['housepic']['name'];
    $himages = "uploads/".$himage;
    $hnumber = $_POST['housenumber'];
    $hstreet = $_POST['hstreet'];
   
    // $hblock = $_POST['hblock'];
    // $hparkingspace = $_POST['hparkingspace'];
    // $helectricmeter = $_POST['helectricmeter'];
    // $hbathrooms = $_POST['hbathrooms'];
    // $hrooms = $_POST['hrooms'];
    // $hkitchen = $_POST['hkitchen'];
    // $hsize = $_POST['hsize'];
    // $hdemand = $_POST['hdemand'];
    // $hbuildyear = $_POST['hbuildyear'];
    // $hparkface = $_POST['hparkface'];
    // $hboulevard = $_POST['hboulevard'];
    // $hfeatures = $_POST['hfeatures'];
    // $hownername = $_POST['hownername'];
    // $hboulevard = $_POST['hownerphone'];
    

    $query = "INSERT INTO houses(h_type, h_images, h_location, h_number, h_street ) 
    VALUES(?,?,?,?,?)";
    $stmt= $con->prepare($query);
    $stmt->bind_param("sssss", $ptype, $himages, $hlocation, $hnumber, $hstreet );
    $stmt->execute();
}      


?>