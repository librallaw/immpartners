<?php

session_start();


//$con = mysqli_connect('localhost','root', 'root');
include_once "connect.inc.php";




//Paystack verification

$curl = curl_init();
$reference = isset($_GET['reference']) ? $_GET['reference'] : '';
if(!$reference){
    die('No reference supplied');
}

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        "accept: application/json",
        "authorization: Bearer sk_test_858bc6de2e4a4e4b138356234bcc15ac99a373d0",
        "cache-control: no-cache"
    ],
));

$response = curl_exec($curl);
$err = curl_error($curl);



if($err){
    // there was an error contacting the Paystack API
    die('Curl returned error: ' . $err);
}

$tranx = json_decode($response);


//var_dump($tranx);exit;


if(!$tranx->status){
    // there was an error from the API
    die('API returned error: ' . $tranx->message);
}

if('success' == $tranx->data->status){
    // transaction was successful...
    // please check other things like whether you already gave value for this ref
    // if the email matches the customer who owns the product etc
    // Give value

    if (isset($_POST['title'])){

        $title = $_POST['title'];
        $surname = $_POST['surname'];
        $firsty = $_POST['first'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $member = $_POST['member'];
        $zonal = $_POST['zonal'];
        $partner = $_POST['partner'];
        $amount =  $tranx->data->amount / 100;
        $type =  $_POST['type'];
        $country =  $_POST['country'];

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
}







