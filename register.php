<?php
session_start();
include "./components/header.php";
include "./components/navbar.php";
include "./components/mobilenavbar.php";
require_once "./controller/auth.php";
?>

        <div class="content-wrap pt-160 pb-160">
            <!-- <div class="py-160 bg-dark">
                <div class="container">
                    <div class="row justify-content-center text-white">
                        <div class="col-lg-10">
                            <h1 class="display-5 text-white mt-5 mb-30 show-on-scroll" data-show-duration="500" data-show-distance="10">Registration Form.</h1>
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

                                    <div class="col-12 col-md-6 show-on-scroll" data-show-duration="500" data-show-distance="10" data-show-delay="!00">
                                        <select class="form-control form-control-lg form-control-white" name="interest">
                                            <option value="" style="color: black">I am intrested in:</option>
                                            <option value="Exhibiting at Port Harcourt Fashion Week" style="color: black">Exhibiting at Port Harcourt Fashion Week</option>
                                            <option value="Attending as a visitor" style="color: black">Attending as a visitor</option>
                                        </select>
                                    </div>

                                </div>

                                <button class="btn btn-white btn-with-ball mt-90 show-on-scroll" type="submit" name="register_btn" data-show-distance="10" data-show-duration="500" data-show-delay="300">submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="container-fluid px-1">
                <div class="row gh-1 gv-1 justify-content-center">

                    <div class="col-12 col-sm-6 col-lg-5 col-xl-3 show-on-scroll" data-show-delay="80" data-show-duration="600" data-show-distance="20">
                        <a class="card card-service card-image-xl card-hover-zoom card-bg-show text-white" href="showcase">
                            <span class="card-img">
                                <img src="assets/images/service/hmex3.jpg" alt="">
                                <span class="background-color" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.13) 0%, rgba(0, 0, 0, 0.65) 100%);"></span>
                            </span>
                            <span class="card-img-overlay">
                                <span class="card-title h5">Designer Registration</span>
                                <span class="btn btn-clean">Register Now
                                    <svg class='icon-arrow icon-arrow-right' width='25' height='10' viewBox='0 0 25 10' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                        <path d='M20 1L24 5L20 9' stroke='currentColor' stroke-width='1.3' stroke-linecap='round' stroke-linejoin='round' />
                                        <path d='M7 5L24 5' stroke='currentColor' stroke-width='1.3' stroke-linecap='round' stroke-linejoin='round' />
                                    </svg>
                                </span>
                            </span>
                        </a>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-5 col-xl-3 show-on-scroll" data-show-delay="80" data-show-duration="600" data-show-distance="20">
                        <a class="card card-service card-image-xl card-hover-zoom card-bg-show text-white" href="future-designers">
                            <span class="card-img">
                                <img src="assets/images/service/contest.jpg" alt="">
                                <span class="background-color" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.13) 0%, rgba(0, 0, 0, 0.65) 100%);"></span>
                            </span>
                            <span class="card-img-overlay">
                                <span class="card-title h5">Future Designers Showcase</span>
                                <span class="btn btn-clean">Register Now
                                    <svg class='icon-arrow icon-arrow-right' width='25' height='10' viewBox='0 0 25 10' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                        <path d='M20 1L24 5L20 9' stroke='currentColor' stroke-width='1.3' stroke-linecap='round' stroke-linejoin='round' />
                                        <path d='M7 5L24 5' stroke='currentColor' stroke-width='1.3' stroke-linecap='round' stroke-linejoin='round' />
                                    </svg>
                                </span>
                            </span>
                        </a>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-5 col-xl-3 show-on-scroll" data-show-delay="80" data-show-duration="600" data-show-distance="20">
                        <a class="card card-service card-image-xl card-hover-zoom card-bg-show text-white" href="top-model">
                            <span class="card-img">
                                <img src="assets/images/service/runway.jpg" alt="">
                                <span class="background-color" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.13) 0%, rgba(0, 0, 0, 0.65) 100%);"></span>
                            </span>
                            <span class="card-img-overlay">
                                <span class="card-title h5">Top Model Nigeria</span>
                                <span class="btn btn-clean">Register Now
                                    <svg class='icon-arrow icon-arrow-right' width='25' height='10' viewBox='0 0 25 10' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                        <path d='M20 1L24 5L20 9' stroke='currentColor' stroke-width='1.3' stroke-linecap='round' stroke-linejoin='round' />
                                        <path d='M7 5L24 5' stroke='currentColor' stroke-width='1.3' stroke-linecap='round' stroke-linejoin='round' />
                                    </svg>
                                </span>
                            </span>
                        </a>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-5 col-xl-3 show-on-scroll" data-show-delay="80" data-show-duration="600" data-show-distance="20">
                        <a class="card card-service card-image-xl card-hover-zoom card-bg-show text-white" href="exhibition">
                            <span class="card-img">
                                <img src="assets/images/service/exhibition.jpg" alt="">
                                <span class="background-color" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.13) 0%, rgba(0, 0, 0, 0.65) 100%);"></span>
                            </span>
                            <span class="card-img-overlay">
                                <span class="card-title h5">Get a Stand</span>
                                <span class="btn btn-clean">Register Now
                                    <svg class='icon-arrow icon-arrow-right' width='25' height='10' viewBox='0 0 25 10' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                        <path d='M20 1L24 5L20 9' stroke='currentColor' stroke-width='1.3' stroke-linecap='round' stroke-linejoin='round' />
                                        <path d='M7 5L24 5' stroke='currentColor' stroke-width='1.3' stroke-linecap='round' stroke-linejoin='round' />
                                    </svg>
                                </span>
                            </span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    
<?php include "./components/footer.php"; ?>