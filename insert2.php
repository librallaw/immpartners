<?php
session_start();

include_once "connect.inc.php";

if (isset($_POST['title'])){

    $title = $_POST['title'];
    $surname = $_POST['surname'];
    $firsty = $_POST['first'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $member = $_POST['member'];
    $zonal = $_POST['zonal'];
    $partner = $_POST['partner'];
    $amount =  $_POST['amount'];
    $country =  $_POST['country'];
    $type =  $_POST['type'];

    $sql = "INSERT INTO form (title,surname,firsty,email,phone,member,zone,partner,amount,type,country) VALUES ('$title', 
'$surname', 
'$firsty', '$email', '$phone', '$member', '$zonal', '$partner','$amount','$type','$country')";

    if (!mysqli_query($con, $sql))
    {
        echo mysqli_error($con);
        //  var_dump(false);exit;
    } else {
        var_dump(true);
        exit;

    }


//    header("refresh:2; url=index.php");

}else{
    var_dump(false);exit;
}
?>