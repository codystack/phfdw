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
        <!-- Meta Pixel Code -->
            <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '953376762414449');
            fbq('track', 'PageView');
            </script>
            <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=953376762414449&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Meta Pixel Code -->

        <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=AW-11250717918"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-11250717918'); </script>
        
    </head>
    <body>