<?php
session_start();

require_once "config/db.php";

if (isset($_GET['close'])) {
  session_destroy();
  unset($_SESSION['email']);
  header("location: top-model");
}
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registration Successful | PHFW&trade;</title>
        <meta name="author" content="Webify">
        <meta property="og:url" content="https://phfashionweek.com/"/>
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
        <link rel="stylesheet" href="https://codepen.io/InaCarine/pen/2b6aab4a41ed640d0846b431d509e663">
        <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
        <style>
            @supports (animation: grow .5s cubic-bezier(.25, .25, .25, 1) forwards) {
                .tick {
                    stroke-opacity: 0;
                    stroke-dasharray: 29px;
                    stroke-dashoffset: 29px;
                    animation: draw .5s cubic-bezier(.25, .25, .25, 1) forwards;
                    animation-delay: .6s
                }

                .circle {
                    fill-opacity: 0;
                    stroke: #219a00;
                    stroke-width: 16px;
                    transform-origin: center;
                    transform: scale(0);
                    animation: grow 1s cubic-bezier(.25, .25, .25, 1.25) forwards;   
                }   
            }

            @keyframes grow {
                60% {
                    transform: scale(.8);
                    stroke-width: 4px;
                    fill-opacity: 0;
                }
                100% {
                    transform: scale(.9);
                    stroke-width: 8px;
                    fill-opacity: 1;
                    fill: #219a00;
                }
            }

            @keyframes draw {
                0%, 100% { stroke-opacity: 1; }
                100% { stroke-dashoffset: 0; }
            }

        </style>
    </head>
    <body>

        <div class="content-wrap">
            <div class="py-70">
                <div class="container shape-parent">
                    <div class="text-center">
                        <div class="shape mt-n160 ml-30">
                            <svg class="mt-n160" width="500" height="318" viewBox="0 0 500 318" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="250" cy="68" r="250" fill="#F5F5F5" />
                            </svg>
                        </div>
                        <div class="lines-style-6">
                            <div class="line show-on-scroll" data-show-duration="500" data-show-distance="140" data-show-delay="400" data-show-origin="right"></div>
                            <div class="line show-on-scroll" data-show-duration="500" data-show-distance="120" data-show-delay="200"></div>
                        </div>
                        <div class="svg-container">    
                            <svg class="ft-green-tick" xmlns="http://www.w3.org/2000/svg" height="100" width="100" viewBox="0 0 48 48" aria-hidden="true">
                                <circle class="circle" fill="#5bb543" cx="24" cy="24" r="22"/>
                                <path class="tick" fill="none" stroke="#FFF" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M14 27l5.917 4.917L34 17"/>
                            </svg>
                        </div>
                        <p class="h4 mb-10 mt-5 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="100">Registration Successful</p>
                        <p class="mb-10 pb-2 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="200">Kindly make payment using payment details below.</p>
                        
                    </div>
                    <div class="row justify-content-center pt-30">
                        <div class="col-12 col-lg-6">
                            <div class="table-responsive-md">
                                <table class="table table-hover table-projects table-underline table-light table-border-dark text-white mb-0">
                                    <tbody>
                                        <tr class="show-on-scroll" data-show-delay="50" data-show-duration="400" data-show-distance="10">
                                            <td class="table-projects-brand text-dark pl-15"><b>Full Name:</b></td>
                                            <td class="table-projects-title text-dark text-right pr-15"><?php echo $_SESSION['firstName']; ?> <?php echo $_SESSION['lastName']; ?></td>
                                        </tr>

                                        <tr class="show-on-scroll" data-show-delay="50" data-show-duration="400" data-show-distance="10">
                                            <td class="table-projects-brand text-dark pl-15"><b>Email:</b></td>
                                            <td class="table-projects-title text-dark text-right pr-15"><?php echo $_SESSION['email']; ?></td>
                                        </tr>

                                        <tr class="show-on-scroll" data-show-delay="50" data-show-duration="400" data-show-distance="10">
                                            <td class="table-projects-brand text-dark pl-15"><b>Phone:</b></td>
                                            <td class="table-projects-title text-dark text-right pr-15"><?php echo $_SESSION['phoneNum']; ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <p class="text-center pt-20 mb-20">Registered Candidates are to pay the sum of <b>₦10,000</b> each.<br>
                                    <b>BANK: </b>ZENITH<br>
                                    <b>ACCOUNT NAME: </b>WAVE EVENTS GLOBAL LTD<br>
                                    <b>ACCOUNT NUMBER: </b>1016456463
                                </p>
                                <hr class="mt-0 mb-10 pt-5">
                                <p class="text-center pt-0 mb-20">Send proof of payment <br>via WhatsApp to <b><a href="tel:+2348038753903">+234 803 875 3903</a></b></p>
                                <div class="text-center pb-3">
                                    <button type="button" class="btn btn-info text-white" onclick="window.print()">
                                        <span class="btn-inner--text">Print</span>
                                    </button>
                                    <a href="close" class="btn btn-danger text-white">
                                        <span class="btn-inner--text">Close</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script src="assets/vendor/object-fit-images/dist/ofi.min.js"></script>
        <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
        <script src="assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="assets/vendor/bootstrap-validator/dist/validator.min.js"></script>
        <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
        <script src="assets/vendor/swiper/dist/js/swiper.min.js"></script>
        <script src="assets/vendor/animejs/lib/anime.min.js"></script>
        <script src="assets/vendor/rellax/rellax.min.js"></script>
        <script src="assets/vendor/jquery-countdown/dist/jquery.countdown.min.js"></script>
        <script src="assets/vendor/moment/min/moment.min.js"></script>
        <script src="assets/vendor/moment-timezone/builds/moment-timezone-with-data.min.js"></script>
        <script src="assets/vendor/isotope-layout/dist/isotope.pkgd.min.js"></script>
        <script src="assets/vendor/isotope-packery/packery-mode.pkgd.min.js"></script>
        <script src="assets/vendor/jarallax/dist/jarallax.min.js"></script>
        <script src="assets/vendor/jarallax/dist/jarallax-video.min.js"></script>
        <script src="assets/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
        <script src="assets/js/main.min.js"></script>

        <script>
            let path = document.querySelector(".tick");
            let length = path.getTotalLength();

            console.log(length); 
        </script>
    </body>

</html>