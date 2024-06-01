<?php
session_start();
include "./components/header.php";
include "./components/fixednavbarlight.php";
include "./components/mobilenavbar.php";
require_once "./controller/auth.php";
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
            <div class="py-160 bg-dark">
                <div class="container">
                    <div class="row justify-content-center text-white">
                        <div class="col-lg-10">
                            <h1 class="display-5 text-white mt-5 mb-30 show-on-scroll" data-show-duration="500" data-show-distance="10">Future Designers Form.</h1>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="off">
                                <div class="row gh-1 gv-3 mt-30">
                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="50">
                                        <input type="text" name="firstName" required class="form-control form-control-lg form-control-white" placeholder="First Name *">
                                    </div>

                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="50">
                                        <input type="text" name="lastName" required class="form-control form-control-lg form-control-white" placeholder="Last Name *">
                                    </div>

                                    <div class="col-12 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="50">
                                        <input type="text" name="brandName" required class="form-control form-control-lg form-control-white" placeholder="Brand Name *">
                                    </div>

                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="150">
                                        <input type="email" name="email" required class="form-control form-control-lg form-control-white" placeholder="Email *">
                                    </div>

                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="200">
                                        <input type="tel" name="phone" required class="form-control form-control-lg form-control-white" placeholder="Phone *">
                                    </div>

                                    <div class="col-12 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="!00">
                                        <label class="form-label" htmlFor="date">Year Established *</label>
                                        <input type="date" name="yearEstablished" required class="form-control form-control-lg form-control-white" placeholder="Year Established *">
                                    </div>

                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="!00">
                                        <input type="text" name="fashionAcademyAttended" required class="form-control form-control-lg form-control-white" placeholder="Fashion Academy Attended *">
                                    </div>

                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="!00">
                                        <input type="text" name="yearGraduated" required class="form-control form-control-lg form-control-white" placeholder="Year Graduated *">
                                    </div>

                                    <div class="col-12 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="350">
                                        <textarea type="text" name="listQualifitions" class="form-control form-control-lg form-control-white" rows="2" placeholder="List Other Qualifications"></textarea>
                                    </div>

                                </div>

                                <button class="btn btn-white btn-with-ball mt-90 show-on-scroll" type="submit" name="future_designers_btn" data-show-distance="10" data-show-duration="500" data-show-delay="300">submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Future Designers Modal -->
        <div class="modal modal-fluid fade" id="futureDesignersCategory" tabindex="-1" role="dialog" aria-labelledby="modal_1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" data-bs-backdrop="static" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 text-center py-4">
                                <div class="py-7 pt-5 pb-5 mb-5">
                                    <img src="assets/images/tandc.png" class="img-fluid img-center svg-inject" width="100">
                                </div>
                                <h6 class="h5">Thank you for your interest in contesting in participating at the PHFW FUTURE DESIGNERS CONTEST. Please take a minute to read through the following guidelines. Kindly note that proceeding to sign up confirms you have accepted the terms and conditions listed below.</h6>
                                <p class="mb-4">
                                    Registration for the PHFW FUTURE DESIGNERS CONTEST is free.<br></p>
                                <p class="mb-4">
                                    Shortlisted designers must have graduated from a fashion academy within the 12 months preceding August 2024, or have established their brand within the 12 months preceding August 2024.
                                </p>
                                <p class="mb-4">
                                    Each contesting designer will showcase 5 pieces from a collection.<br>
                                    Contesting designers will be judged on Inspiration, Illustration, Presentation, finishing and brand marketing skills.
                                </p>
                                <p class="mb-4">
                                    All contesting designers are to have their 5pcs ready and available on the day of the fitting communicated by the PHFW team.
                                </p>
                                <p class="mb-4">
                                    Contesting designers must be on set 1 hour before show time.<br>
 
                                    Contesting designers are advised to have their guests arrive at least 30 Minutes before show time.
                                </p>
                                <p class="mb-4">
                                    Contesting designers are not allowed to have assistants backstage as that will be taken care of by the PHFW team.
                                </p>
                                <button type="button" class="btn btn-dark" data-dismiss="modal">Sign me up!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
<?php include "./components/footer.php"; ?>