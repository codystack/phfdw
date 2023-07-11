<?php
// session_start();
// include "./components/header.php";
// include "./components/fixednavbarlight.php";
// include "./components/mobilenavbar.php";
// require_once "./controller/auth.php";
?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>404 | PHFDW&trade;</title>
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
        <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    </head>

<body>

        <div class="content-wrap">
            <div class="py-160 text-center">
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
                    <!-- <h1 class="display-3 mb-12 mt-2 show-on-scroll" data-show-duration="600" data-show-distance="10">404</h1> -->
                    <img src="./assets/images/do-not-enter.png" class="mb-10" width="200px" alt="">
                    <p class="h3 alert-link mb-10 show-on-scroll mt-15" data-show-duration="500" data-show-distance="10" data-show-delay="100">Registration Closed 😿</p>
                    <p class="mb-40 pb-2 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="200">Perhaps you would like to go back to the home page?</p>
                    <a href="./" class="btn btn-dark btn-with-ball mb-15 show-on-scroll" data-show-duration="400" data-show-distance="10" data-show-delay="230">go to home</a>
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
    </body>

        <!-- <div class="content-wrap">
            <div class="py-160 bg-dark">
                <div class="container">
                    <div class="row justify-content-center text-white">
                        <div class="col-lg-10">
                            <h1 class="display-5 text-white mt-5 mb-30 show-on-scroll" data-show-duration="500" data-show-distance="10">Designers Form.</h1>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="off">
                                <div class="row gh-1 gv-3 mt-30">

                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="!00">
                                        <input type="text" name="firstName" required class="form-control form-control-lg form-control-white" placeholder="First Name *">
                                    </div>

                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="!00">
                                        <input type="text" name="lastName" required class="form-control form-control-lg form-control-white" placeholder="Last Name *">
                                    </div>

                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="50">
                                        <input type="text" name="brandName" required class="form-control form-control-lg form-control-white" placeholder="Brand Name *">
                                    </div>

                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="!00">
                                        <input type="text" name="address" required class="form-control form-control-lg form-control-white" placeholder="Address *">
                                    </div>

                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="150">
                                        <input type="email" name="email" required class="form-control form-control-lg form-control-white" placeholder="Email *">
                                    </div>

                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="200">
                                        <input type="tel" name="phoneNum" required class="form-control form-control-lg form-control-white" placeholder="Phone *">
                                    </div>

                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="!00">
                                        <input type="text" name="facebook" class="form-control form-control-lg form-control-white" placeholder="Facebook ID">
                                    </div>

                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="!00">
                                        <input type="text" name="instagram" class="form-control form-control-lg form-control-white" placeholder="Instagram handle">
                                    </div>

                                    <div class="col-12 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="350">
                                        Have you participated in a fashion show?
                                        <textarea type="text" name="participated" class="form-control form-control-lg form-control-white" rows="2" placeholder="If yes give details..."></textarea>
                                    </div>

                                </div>

                                <button class="btn btn-white btn-with-ball mt-90 show-on-scroll" type="submit" name="showcase_btn" data-show-distance="10" data-show-duration="500" data-show-delay="300">submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="modal modal-fluid fade" id="designersCategory" tabindex="-1" role="dialog" aria-labelledby="modal_1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" data-bs-backdrop="static" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 text-center py-4">
                                <div class="py-7 pt-5 pb-5 mb-5">
                                    <img src="assets/images/tandc.png" class="img-fluid img-center svg-inject" width="100">
                                </div>
                                <h6 class="h5">Thank you for your interests in showcasing your collection at the PHFW3.  Please take a minute to read through the following guidelines. Kindly note that proceeding to make payment confirms you have accepted the terms and conditions listed below.</h6>
                                <p class="mb-4">
                                The fashion week which is scheduled to hold on the 28th and 29th of July will feature three runway shows. Day one wi feature one show while day two will feature 2 shows. Registered designers are to pay a production fee. Please note that production fees vary according to the shows.<br>

                                <strong class="mt-1">Production fee for Day 1 is N100,000 , Day 2 first show is N50,000 while Day 2 second show is N150,000.</strong></p>
                                <p class="mb-2">Kindly note that we have limited slots on each show day and once the slots are full, we will close in on registration for that particular show.</p>
                                <p>Once you’ve decided on what show to run on, please read through the terms and conditions below, fill the form and make payment accordingly to the account details provided.<br>
                                <strong class="mt-2">Kindly note that payments are non refundable</strong></p>

                                <p class="mt-2">All payments should be made to<br>
                                <strong>ACCOUNT NAME:</strong> WAVE EVENTS GLOBAL LTD <br>
                                <strong>ACCOUNT NUMBER:</strong> 1016456463<br>
                                <strong>BANK:</strong> ZENITH 
                                </p>
                                <p class="mb-4">
                                All payments will be confirmed within 24 hours upon payment. Designers who do not get any confirmation after 24 hours are advised to reach out to the PHFW Team on <strong>08038753903</strong> with proof of payment.
                                </p>
                                <p class="mb-4">
                                Designers are advised to pay with registered brand names or indicate Brand name on remarks.
                                </p>
                                <p class="mb-4">
                                Each designer will showcase 15 pieces from a collection.
                                </p>
                                <p class="mb-4">
                                Designers are to have their 15pcs ready and available on the day of the fitting communicated by the PHFW team.
                                </p>
                                <p class="mb-4">
                                Showcasing designers must be on set 1 hour before show time.
                                </p>
                                <p class="mb-4">
                                The PHFW Team reserve the right to allocate showcase day to designers as such, designers cannot alter the order of Showcase.
                                </p>
                                <p class="mb-4">
                                Designers are advised to have their guests arrive at least 30 Minutes before show time.
                                </p>
                                <p>
                                Each designer is entitled to have only one assistant backstage as access will be denied to any other assistant.
                                </p>
                                <button type="button" class="btn btn-dark" data-dismiss="modal">Sign me up!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    
<?php //include "./components/footer.php"; ?>