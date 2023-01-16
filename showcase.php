<?php
session_start();
include "./components/header.php";
include "./components/fixednavbarlight.php";
include "./components/mobilenavbar.php";
require_once "./controller/auth.php";
?>

        <div class="content-wrap">
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

        <!-- Designers Category Modal -->
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
                                Registered Designers are to pay Production fee of N100, 000 each<br>

                                <strong>The production fee is non-refundable</strong><br>

                                All payments should be made to<br>
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
        </div>
    
<?php include "./components/footer.php"; ?>