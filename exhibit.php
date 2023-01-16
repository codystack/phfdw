<?php
session_start();
include "./components/header.php";
include "./components/navbar.php";
include "./components/mobilenavbar.php";
require_once "./controller/auth.php";
?>

        <div class="content-wrap pt-160 pb-160">
            <div class="container">
                <div class="row gv-3 align-items-center">
                    <div class="col-12 col-lg-6 order-lg-2 show-on-scroll" data-show-duration="500" data-show-distance="20" data-show-origin="left" data-show-delay="50">
                        <a href="exhibition" class="gallery-item gallery-item-lg" data-animation-effect="fade">
                            <img src="assets/images/service/contest.jpg" alt="">
                        </a>
                    </div>
                    <div class="d-none d-lg-block col-1 order-lg-1"></div>
                    <div class="col-12 col-lg-5 order-lg-0 show-on-scroll" data-show-duration="500" data-show-distance="20" data-show-origin="right" data-show-delay="250">
                        <h3>PHFW Future Designers Contest</h3>
                        <p>This segment of the event is a contest for upcoming fashion designers. The essence is to reward and encourage young designers.<br>
                                Contesting designers will be judged on Inspiration, Illustration, Presentation, finishing and brand marketing skills.<br>
                                This segment of the event is proudly support by the British Council, Startup South and Godwin Etim Foundation. Winner of the future designers contest will receive a  start up fund from Godwin Etim Foundation.</p>
                        <a href="future-designers" class="btn btn-dark btn-with-ball">contest</a>
                    </div>
                </div>

                <div class="row gv-3 align-items-center mb-100 mb-lg-0">
                    <div class="col-12 col-lg-6 show-on-scroll" data-show-duration="500" data-show-distance="20" data-show-origin="left" data-show-delay="250">
                        <a href="model" class="gallery-item gallery-item-lg" data-animation-effect="fade">
                            <img src="assets/images/participate.jpg" alt="">
                        </a>
                    </div>
                    <div class="d-none d-lg-block col-1 mr-xl-10"></div>
                    <div class="col-12 col-lg ml-xl-5 mr-xl-n10 show-on-scroll" data-show-duration="500" data-show-distance="20" data-show-origin="right" data-show-delay="50">
                        <h3>PHFW Creatives Summit</h3>
                        <p>In line with our vision of expanding the potential power of fashion as a tool for poverty alleviation and as part of the build up activities for the Port Harcourt Fashion Week 3, the PHFW will hold her first ever creatives summit tagged <b>"Fashion Force... Converge, Converse & Connect"</b>.
                        <br>The Summit is themed: The Future of fashion in Port Harcourt, discuss will cut accross different topics within the sector.</p>
                        <a href="creatives-summit" class="btn btn-dark btn-with-ball">register to attend</a>
                    </div>
                    <div class="d-none d-xl-block col-1"></div>
                </div>

                <div class="row gv-3 align-items-center mb-100 mb-lg-0">
                    <div class="col-12 col-lg-6 order-lg-2 show-on-scroll" data-show-duration="500" data-show-distance="20" data-show-origin="right" data-show-delay="250">
                        <a href="showcase" class="gallery-item gallery-item-lg" data-animation-effect="fade">
                            <img src="assets/images/designers1.jpg" alt="">
                        </a>
                    </div>
                    <div class="d-none d-lg-block col-1 order-lg-1 mr-xl-10"></div>
                    <div class="col-12 col-lg order-lg-0 ml-xl-5 mr-xl-n10 show-on-scroll" data-show-duration="500" data-show-distance="20" data-show-origin="left" data-show-delay="50">
                        <h3>Runway Showcase</h3>
                        <p>Showcase your latest collection on our runway and leverage on the power of our strong media partners and guests/buyers to reposition your brand to the next level.</p>
                        <a href="showcase" class="btn btn-dark btn-with-ball">showcase</a>
                    </div>
                    <div class="d-none d-xl-block col-1"></div>
                </div>

                <div class="row gv-3 align-items-center">
                    <div class="col-12 col-lg-6 show-on-scroll" data-show-duration="500" data-show-distance="20" data-show-origin="right" data-show-delay="50">
                        <a href="exhibition" class="gallery-item gallery-item-lg" data-animation-effect="fade">
                            <img src="assets/images/exhibit1.jpg" alt="">
                        </a>
                    </div>
                    <div class="d-none d-lg-block col-1"></div>
                    <div class="col-12 col-lg-5 show-on-scroll" data-show-duration="500" data-show-distance="20" data-show-origin="left" data-show-delay="250">
                        <h3>Exhibition</h3>
                        <p>Exhibit your products to a wide range of audience. Deliberate efforts have been put in place to attract the right audience to the benefits of the exhibitors.</p>
                        <a href="exhibition" class="btn btn-dark btn-with-ball">exhibit</a>
                    </div>
                </div>

            </div>
        </div>
    
<?php include "./components/footer.php"; ?>