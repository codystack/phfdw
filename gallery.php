<?php
$page = 'gallery';
include "./components/header.php";
include "./components/navbar.php";
include "./components/mobilenavbar.php";
require_once "./controller/auth.php";
?>


        <div class="photo-gallery content-wrap">
            <div class="py-160">
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 masonry gallery-grid">
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/1.jpg">
                                <img src="./assets/images/gallery/1.jpg" data-src="./assets/images/gallery/1.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/2.jpg">
                                <img src="./assets/images/gallery/2.jpg" data-src="./assets/images/gallery/2.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/3.jpg">
                                <img src="./assets/images/gallery/3.jpg" data-src="./assets/images/gallery/3.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/4.jpg">
                                <img src="./assets/images/gallery/4.jpg" data-src="./assets/images/gallery/4.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/5.jpg">
                                <img src="./assets/images/gallery/5.jpg" data-src="./assets/images/gallery/5.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/6.jpg">
                                <img src="./assets/images/gallery/6.jpg" data-src="./assets/images/gallery/6.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/7.jpg">
                                <img src="./assets/images/gallery/7.jpg" data-src="./assets/images/gallery/7.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/8.jpg">
                                <img src="./assets/images/gallery/8.jpg" data-src="./assets/images/gallery/8.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/9.jpg">
                                <img src="./assets/images/gallery/9.jpg" data-src="./assets/images/gallery/9.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/10.jpg">
                                <img src="./assets/images/gallery/10.jpg" data-src="./assets/images/gallery/10.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/11.jpg">
                                <img src="./assets/images/gallery/11.jpg" data-src="./assets/images/gallery/11.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/12.jpg">
                                <img src="./assets/images/gallery/12.jpg" data-src="./assets/images/gallery/12.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/13.jpg">
                                <img src="./assets/images/gallery/13.jpg" data-src="./assets/images/gallery/13.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/14.jpg">
                                <img src="./assets/images/gallery/14.jpg" data-src="./assets/images/gallery/14.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/15.jpg">
                                <img src="./assets/images/gallery/15.jpg" data-src="./assets/images/gallery/15.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/16.jpg">
                                <img src="./assets/images/gallery/16.jpg" data-src="./assets/images/gallery/16.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/17.jpg">
                                <img src="./assets/images/gallery/17.jpg" data-src="./assets/images/gallery/17.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/18.jpg">
                                <img src="./assets/images/gallery/18.jpg" data-src="./assets/images/gallery/18.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/19.jpg">
                                <img src="./assets/images/gallery/19.jpg" data-src="./assets/images/gallery/19.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/20.jpg">
                                <img src="./assets/images/gallery/20.jpg" data-src="./assets/images/gallery/20.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/21.jpg">
                                <img src="./assets/images/gallery/21.jpg" data-src="./assets/images/gallery/21.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/22.jpg">
                                <img src="./assets/images/gallery/22.jpg" data-src="./assets/images/gallery/22.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/23.jpg">
                                <img src="./assets/images/gallery/23.jpg" data-src="./assets/images/gallery/23.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/24.jpg">
                                <img src="./assets/images/gallery/24.jpg" data-src="./assets/images/gallery/24.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/25.jpg">
                                <img src="./assets/images/gallery/25.jpg" data-src="./assets/images/gallery/25.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/26.jpg">
                                <img src="./assets/images/gallery/26.jpg" data-src="./assets/images/gallery/26.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/27.jpg">
                                <img src="./assets/images/gallery/27.jpg" data-src="./assets/images/gallery/27.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/28.jpg">
                                <img src="./assets/images/gallery/28.jpg" data-src="./assets/images/gallery/28.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/29.jpg">
                                <img src="./assets/images/gallery/29.jpg" data-src="./assets/images/gallery/29.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/30.jpg">
                                <img src="./assets/images/gallery/30.jpg" data-src="./assets/images/gallery/30.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/31.jpg">
                                <img src="./assets/images/gallery/31.jpg" data-src="./assets/images/gallery/31.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/32.jpg">
                                <img src="./assets/images/gallery/32.jpg" data-src="./assets/images/gallery/32.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/33.jpg">
                                <img src="./assets/images/gallery/33.jpg" data-src="./assets/images/gallery/33.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/34.jpg">
                                <img src="./assets/images/gallery/34.jpg" data-src="./assets/images/gallery/34.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/35.jpg">
                                <img src="./assets/images/gallery/35.jpg" data-src="./assets/images/gallery/35.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/36.jpg">
                                <img src="./assets/images/gallery/36.jpg" data-src="./assets/images/gallery/36.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/37.jpg">
                                <img src="./assets/images/gallery/37.jpg" data-src="./assets/images/gallery/37.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/38.jpg">
                                <img src="./assets/images/gallery/38.jpg" data-src="./assets/images/gallery/38.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/39.jpg">
                                <img src="./assets/images/gallery/39.jpg" data-src="./assets/images/gallery/39.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/40.jpg">
                                <img src="./assets/images/gallery/40.jpg" data-src="./assets/images/gallery/40.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/41.jpg">
                                <img src="./assets/images/gallery/41.jpg" data-src="./assets/images/gallery/41.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/42.jpg">
                                <img src="./assets/images/gallery/42.jpg" data-src="./assets/images/gallery/42.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/43.jpg">
                                <img src="./assets/images/gallery/43.jpg" data-src="./assets/images/gallery/43.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/44.jpg">
                                <img src="./assets/images/gallery/44.jpg" data-src="./assets/images/gallery/44.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/45.jpg">
                                <img src="./assets/images/gallery/45.jpg" data-src="./assets/images/gallery/45.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/46.jpg">
                                <img src="./assets/images/gallery/46.jpg" data-src="./assets/images/gallery/46.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/47.jpg">
                                <img src="./assets/images/gallery/47.jpg" data-src="./assets/images/gallery/47.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/48.jpg">
                                <img src="./assets/images/gallery/48.jpg" data-src="./assets/images/gallery/48.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/49.jpg">
                                <img src="./assets/images/gallery/49.jpg" data-src="./assets/images/gallery/49.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/50.jpg">
                                <img src="./assets/images/gallery/50.jpg" data-src="./assets/images/gallery/50.jpg" class="img-fluid">
                            </a>
                        </div>
                        <div class="col">
                            <a class="gallery-item" href="./assets/images/gallery/51.jpg">
                                <img src="./assets/images/gallery/51.jpg" data-src="./assets/images/gallery/51.jpg" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include "./components/footer.php"; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>

<script>
    window.onload = function () {
        var imgDefer = document.getElementsByTagName("img");
        for (var i = 0; i < imgDefer.length; i++) {
            if (imgDefer[i].getAttribute("data-src")) {
            imgDefer[i].setAttribute("src", imgDefer[i].getAttribute("data-src"));
            }
        }

        var $container = $(".masonry");
        $container.imagesLoaded(function () {
            $container.masonry({
            percentPosition: true
            });
        });
    };
</script>