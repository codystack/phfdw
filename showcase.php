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

                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="!00">
                                        <select class="form-control form-control-lg form-control-white" name="specialty">
                                            <option value="" style="color: black">Select Area of Specialty </option>
                                            <option value="Male" style="color: black">Male</option>
                                            <option value="Female" style="color: black">Female</option>
                                        </select>
                                    </div>

                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="!00">
                                        <select class="form-control form-control-lg form-control-white" name="designerCategory">
                                            <option value="" style="color: black">Choose category:</option>
                                            <option value="Don" style="color: black">DON = ₦150,000</option>
                                            <option value="Woko" style="color: black">WOKO = ₦100,000</option>
                                            <option value="Etibo" style="color: black">ETIBO = ₦50,000</option>
                                        </select>
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
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 text-center py-4">
                                <div class="py-7 pt-5 pb-5">
                                    <img src="assets/images/sewing-machine.svg" class="img-fluid img-center svg-inject" width="100">
                                </div>
                                <h6 class="h5">Designers categories & benefits</h6>
                                <p class="mb-4">
                                <strong>DON = ₦150,000</strong><br>
                                2m x 2m exhibition booth<br>
                                15-20 outfits to be showcased<br>
                                Models for runway showcase<br>
                                Personalized interview from our media partners<br>
                                5 front roll tickets and 10 regular tickets<br>
                                </p>
                                <hr class="mb-4 mt-4">
                                <p class="mb-4">
                                <strong>WOKO = ₦100,000</strong><br>
                                15 outfits to be showcased<br>
                                Models for runway showcase<br>
                                Personalized interview from our media partners<br>
                                3 front roll tickets and 7 regular tickets<br>
                                </p>
                                <hr class="mb-4 mt-4">
                                <p>
                                <strong>ETIBO = ₦50,000</strong><br>
                                10 outfits to be showcased<br>
                                Models for runway showcase<br>
                                2 front roll tickets and 3 regular tickets<br>
                                </p>
                                <button type="button" class="btn btn-dark" data-dismiss="modal">Sign me up!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
<?php include "./components/footer.php"; ?>