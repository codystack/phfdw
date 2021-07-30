<?php
session_start();
include "./components/header.php";
include "./components/navbar.php";
include "./components/mobilenavbar.php";
require_once "./controller/auth.php";
?>

        <div class="content-wrap pt-160 pb-160">
            <div class="container">
                <div class="row gv-3 align-items-center mb-100 mb-lg-0">
                    <div class="col-12 col-lg-6 show-on-scroll" data-show-duration="500" data-show-distance="20" data-show-origin="left" data-show-delay="250">
                        <a href="showcase" class="gallery-item gallery-item-lg" data-animation-effect="fade">
                            <img src="assets/images/designers.jpg" alt="">
                        </a>
                    </div>
                    <div class="d-none d-lg-block col-1 mr-xl-10"></div>
                    <div class="col-12 col-lg ml-xl-5 mr-xl-n10 show-on-scroll" data-show-duration="500" data-show-distance="20" data-show-origin="right" data-show-delay="50">
                        <h3>Designers</h3>
                        <p>Showcase your latest collection on our runway with other famous guests designers.</p>
                        <a href="showcase" class="btn btn-dark btn-with-ball">showcase</a>
                    </div>
                    <div class="d-none d-xl-block col-1"></div>
                </div>
                <div class="row gv-3 align-items-center">
                    <div class="col-12 col-lg-6 order-lg-2 show-on-scroll" data-show-duration="500" data-show-distance="20" data-show-origin="right" data-show-delay="50">
                        <a href="exhibition" class="gallery-item gallery-item-lg" data-animation-effect="fade">
                            <img src="assets/images/exhibit.jpg" alt="">
                        </a>
                    </div>
                    <div class="d-none d-lg-block col-1 order-lg-1"></div>
                    <div class="col-12 col-lg-5 order-lg-0 show-on-scroll" data-show-duration="500" data-show-distance="20" data-show-origin="left" data-show-delay="250">
                        <h3>Exhibition</h3>
                        <p>Exhibit your products to a wide range of audience. Deliberate efforts have been put in place to attract the right audience to the benefits of the exhibitors.</p>
                        <a href="exhibition" class="btn btn-dark btn-with-ball">exhibit</a>
                    </div>
                </div>
            </div>
        </div>
    
<?php include "./components/footer.php"; ?>