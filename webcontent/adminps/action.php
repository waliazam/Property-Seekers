<?php 

include 'dbconnect.php';

if (isset($_GET['delete_user'])) {
    $id=$_GET['delete_user'];
    $query = "DELETE FROM user_profile WHERE id=?";
    $stmt= $con->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    header('location:allusers.php');
    $_SESSION['response']= "User Deleted ";
    $_SESSION['res_type']="Sucess";
}


// delete lisitng houses
if (isset($_GET['delete_house'])) {
    $id=$_GET['delete_house'];
    $query = "DELETE FROM houses WHERE id=?";
    $stmt= $con->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    header('location:all-listing.php');
    $_SESSION['response']= "User Deleted ";
    $_SESSION['res_type']="Sucess";
};

if (isset($_GET['details'])) {
    $id=$_GET['details'];
    $query = "SELECT * FROM houses WHERE id=?";
    $stmt= $con->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result= $stmt->get_result();
    $row = $result->fetch_assoc();

    $href = $row['id'];
    $ptype = $row['h_type'];
    $houseimage = $row["h_images"];
    // $tempimage = $_FILES["housepic"]['tmp_name'];
    // $uploadimage = "uploads/".$houseimage;
    $location = $row['h_location'];
    $hnumber = $row['h_number'];
    $street = $row['h_street'];
    $hblock = $row['h_block'];
    $hparkingspace = $row['pspace'];
    $helectricmeter = $row['emeter'];
    $hunits = $row['units'];
    $hbathrooms = $row['bathrooms'];
    $hrooms = $row['bedrooms'];
    $hkitchen = $row['kitchen'];
    $hsize = $row['size'];
    $hdemand = $row['demand'];
    $hbuildyear = $row['byear'];
    $hparkface = $row['pface'];
    $southface = $row['sface'];
    $hboulevard = $row['boulevard'];
    $corner = $row['corner'];
    $deadend = $row['stree'];
    $serventroom = $row['sroom'];
    $gasmeter = $row['gasmet'];
    $laundary = $row['laundry'];
    $powderroom = $row['proom'];
    $basement = $row['basement'];
    $lawn = $row['lawn'];
    $hfeatures = $row['exfeature'];
    $hownername = $row['ownername'];
    $hownerphone = $row['ownernum'];
    $plotel = $row['extraland'];
    $pp = $row['ppaid'];
    $up = $row['upaid'];
};

function check_login($con){

    if(isset($_SESSION['user_id'])){

        $id = $_SESSION['user_id'];
        $query = "select * from users where user_id = '$id' limit 1";

        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    header("Location: login.php");
    die;
};

function random_num($length){

    $text = "";
    
    if ($length<5) {
       $length = 5;
    }

    $len = rand(4, $length);
    for ($i=0; $i < $len; $i++) {
       $text .= rand(0,9);
    }

    return $text;

}

?>
