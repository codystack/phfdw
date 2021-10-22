<?php
session_start();

require_once "config/db.php";

//Verify user Start
if (isset($_POST['verify_access_btn'])) {

  
    $accessCode = $conn->real_escape_string($_POST['accessCode']);
  
        $query = "SELECT * FROM access WHERE accessCode='$accessCode'";
        $results = mysqli_query($conn, $query);
        while($row = mysqli_fetch_array($results)) {
            $accessCode = $row['accessCode'];
            $firstName = $row['firstName'];
            $lastName = $row['lastName'];
            $email = $row['email'];
            $phoneNum = $row['phoneNum'];
            $companyName = $row['companyName'];
        }
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['accessCode'] = $accessCode;
            $_SESSION['firstName'] = $firstName;
            $_SESSION['lastName'] = $lastName;
            $_SESSION['email'] = $email;
            $_SESSION['phoneNum'] = $phoneNum;
            $_SESSION['companyName'] = $companyName;
        header('location: access-details');
        }else {
            $_SESSION['message_title'] = "Incorrect access code!";
            $_SESSION['message'] = "Please correct access code";
        }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Registration Successful | PHFDW&trade;</title>
        <meta name="author" content="ThankGod Okoro">
        <meta property="og:url" content="https://phfashionweek.com/"/>
	    <meta property="og:type" content="website" />
        <meta property="og:title" content="TG&trade; :: Web + App Developer, UI/UX Designer, Product Designer & Graphic Designer." />
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
            <div class="py-70 text-center">
                <div class="container shape-parent">
                    <div class="shape mt-n160 ml-30">
                        <svg class="mt-n160" width="500" height="318" viewBox="0 0 500 318" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="250" cy="68" r="250" fill="#F5F5F5" />
                        </svg>
                    </div>
                    <div class="lines-style-6">
                        <div class="line show-on-scroll" data-show-duration="500" data-show-distance="140" data-show-delay="400" data-show-origin="right"></div>
                        <div class="line show-on-scroll" data-show-duration="500" data-show-distance="120" data-show-delay="200"></div>
                    </div>
                    <img src="assets/images/logoblack.svg" class="mt-5" width="250px">
                    <p class="h4 mb-10 mt-5 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="100">Ticket Check-in</p>
                    <div class="row justify-content-center pt-30">
                        <div class="col-12 col-lg-6">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="off">
                                <div class="form-group-overlay">
                                    <input class="form-control form-control-dark" type="text" placeholder="Access Code">
                                    <button type="submit" name="verify_access_btn" class="btn btn-dark btn-with-ball text-white">send<span class="btn-ball" style="transform: translateY(0px);"></span></button>
                                </div>
                            </form>
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
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="assets/js/main.min.js"></script>

        <script>
            let path = document.querySelector(".tick");
            let length = path.getTotalLength();

            console.log(length); 
        </script>

        <?php
            if (isset($_SESSION['message']))
            {
                ?>
                <script>
                    swal({
                        title: "<?php echo $_SESSION['message_title']; ?>",
                        text: "<?php echo $_SESSION['message']; ?>",
                        icon: "error",
                        buttons: false,
                        timer: 3000
                    });
                </script>
                <?php
                unset($_SESSION['message']);
            }
        ?>
    </body>

</html>