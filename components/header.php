<?php
include "./config/db.php";
//GET VISTORS
$user_ip = $_SERVER['REMOTE_ADDR'];
$check_ip = mysqli_query($conn, "SELECT visitorip FROM traffic WHERE page ='home' and visitorip ='$user_ip'");
if(mysqli_num_rows($check_ip) >=1)
{
    //not unique user
}
else
{
    $insertQuery = mysqli_query($conn, "INSERT INTO traffic (page, visitorip) VALUE ('home','$user_ip')");
}
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHFW&trade; | Port Harcourt Fashion Week</title>
        <meta name="author" content="ThankGod Okoro">
        <meta property="og:url" content="https://portharcourtfashionweek.com"/>
	    <meta property="og:type" content="website" />
        <meta property="og:title" content="PHFW&trade; | Port Harcourt Fashion Week" />
        <meta name="og:description" content="The Port Harcourt Fashion and Design Week is a three-day fashion event targeted at promoting sustainable development through stimulating youths who have interest and potentials in the fashion industry, with the necessary tools that will enable, encourage and support their aspirations of being successful and economically empowered youths.">
        <meta name="keywords" content="Port Harcourt,PH,Pitakwa,PHFDW,Fashion,Port Harcourt Fashion & Design Week,Design,Week,Bole,Fish,Oil and Gas,Slay,Velisco">
        <link rel="icon" type="image/png" href="assets/images/favicon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/vendor/swiper/dist/css/swiper.min.css" />
        <link rel="stylesheet" href="assets/vendor/fancybox/dist/jquery.fancybox.min.css" />
        <link rel="stylesheet" href="assets/css/style.min.css">
        <link rel="stylesheet" href="assets/css/custom.css">
        <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    </head>
    <body>