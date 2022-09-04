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
                            <h1 class="display-5 text-white mt-5 mb-30 show-on-scroll" data-show-duration="500" data-show-distance="10">Summit Form.</h1>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" autocomplete="off">
                                <div class="row gh-1 gv-3 mt-30">
                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="50">
                                        <input type="text" name="firstName" required class="form-control form-control-lg form-control-white" placeholder="First Name *">
                                    </div>

                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="50">
                                        <input type="text" name="lastName" required class="form-control form-control-lg form-control-white" placeholder="Last Name *">
                                    </div>

                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="150">
                                        <input type="email" name="email" required class="form-control form-control-lg form-control-white" placeholder="Email *">
                                    </div>

                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="200">
                                        <input type="tel" name="phone" required class="form-control form-control-lg form-control-white" placeholder="Phone *">
                                    </div>

                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="50">
                                        <input type="text" name="brandName" required class="form-control form-control-lg form-control-white" placeholder="Brand Name *">
                                    </div>

                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="50">
                                        <input type="text" name="instagram" required class="form-control form-control-lg form-control-white" placeholder="Instagram Handle *">
                                    </div>

                                </div>

                                <button class="btn btn-white btn-with-ball mt-90 show-on-scroll" type="submit" name="summit_btn" data-show-distance="10" data-show-duration="500" data-show-delay="300">submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
<?php include "./components/footer.php"; ?>