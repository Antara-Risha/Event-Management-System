<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Stylesheet -->
    <link rel="stylesheet" href="../frontend/style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Top Search Form Area -->
    <div class="top-search-area">
        <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <!-- Close -->
                        <button type="button" class="btn close-btn" data-dismiss="modal"><i class="ti-close"></i></button>
                        <!-- Form -->
                        <form action="../frontend/index" method="post">
                            <input type="search" name="top-search-bar" class="form-control" placeholder="Search and hit enter...">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between" id="alimeNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="../frontend/index"><img src="" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li><a href="../frontend/index">Home</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="../frontend/venue">- Venue</a></li>
                                            <li><a href="../frontend/caterer">- Caterer</a></li>
                                            <li><a href="../frontend/photographer">- Photographer</a></li>
                                            <li><a href="../frontend/beautician">- Beautician</a></li>
                                            <li><a href="../frontend/decorator">- Decorator</a></li>
											<li><a href="../frontend/card_print">- Card Printer</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="../frontend/about">About</a></li>
                                    <li><a href="../frontend/gallery">Gallery</a></li>
									<li><a href="../frontend/cart">Your Bookings</a></li>
                                    <li><a href="../frontend/contact">Contact</a></li>
                                </ul>

                                <!-- Search Icon -->
                                <div class="search-icon" data-toggle="modal" data-target="#searchModal"><i class="ti-search"></i></div>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(../frontend/img/bg-img/cover.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Beautician</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="../frontend/index"><i class="icon_house_alt"></i> Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Beautician</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- About Us Area Start -->
    <div class="about-us-area section-padding-80-0 clearfix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="about-us-content mb-80">
                        <h3 class="wow fadeInUp" data-wow-delay="100ms"> Elegant Makeover</h3>
                        <div class="line wow fadeInUp" data-wow-delay="200ms"></div>
                        <p class="wow fadeInUp" data-wow-delay="300ms">Elegant Makeover & Fashion is a place for international hair makeover service and high branded makeup. We ensure the best quality for our clients. Our motive is client satisfaction. We take very limited clients so you must have appointment before coming.</p>
                        <p class="wow fadeInUp" data-wow-delay="300ms">Gorgeous heavy makeover with original products and highend makeup brands combined with saree and hairstyle</p>
						<p class="wow fadeInUp" data-wow-delay="300ms">20000 BDT</p>
                        <a class="btn alime-btn btn-2 mt-30 wow fadeInUp" data-wow-delay="500ms" href="../frontend/dreamwaver_booking">Booking Now!</a>

                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="about-video-area mb-80 wow fadeInUp" data-wow-delay="100ms">
                        <img src="../frontend/img/bg-img/elegant.jpg" alt="">
                    </div>
                </div>
            </div>
			<div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="about-us-content mb-80">
                        <h3 class="wow fadeInUp" data-wow-delay="100ms"> Woman's World </h3>
                        <div class="line wow fadeInUp" data-wow-delay="200ms"></div>
                        <p class="wow fadeInUp" data-wow-delay="300ms"> Woman's World is a new generation, customer friendly & modern beauty salon, medical aesthetic clinic & beauty institution that continues its 20 year commitment to high quality service & educating women about beauty science, cosmetology & aesthetics.</p>
                        <p class="wow fadeInUp" data-wow-delay="300ms">Natural Makeover with original products with saree and hairstyle</p>
						<p class="wow fadeInUp" data-wow-delay="300ms">12000 BDT</p>
                        <a class="btn alime-btn btn-2 mt-30 wow fadeInUp" data-wow-delay="500ms" href="../frontend/dreamwaver_booking">Booking Now!</a>

                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="about-video-area mb-80 wow fadeInUp" data-wow-delay="100ms">
                        <img src="img/bg-img/wmw.jpg" alt="">
                    </div>
                </div>
            </div>
			<div class="row align-items-center">
                <div class="col-12 col-lg-6">
                    <div class="about-us-content mb-80">
                        <h3 class="wow fadeInUp" data-wow-delay="100ms"> Persona </h3>
                        <div class="line wow fadeInUp" data-wow-delay="200ms"></div>
                        <p class="wow fadeInUp" data-wow-delay="300ms">We care about your choice, feel free to contact us for your special day.. brial.reception, party makeover, skin care,hair care/colour/rebounding &etc..</p>
                        <p class="wow fadeInUp" data-wow-delay="300ms">Semi gorgeous makeover with original makeup brands with saree and hairstyle</p>
						<p class="wow fadeInUp" data-wow-delay="300ms">9000 BDT</p>
                        <a class="btn alime-btn btn-2 mt-30 wow fadeInUp" data-wow-delay="500ms" href="../frontend/dreamwaver_booking">Booking Now!</a>

                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="about-video-area mb-80 wow fadeInUp" data-wow-delay="100ms">
                        <img src="../frontend/img/bg-img/studio.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Area End -->

    <!-- Follow Area Start -->
	<div class="instragram-feed-area owl-carousel">
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="../frontend/img/bg-img/v10.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="../frontend/img/bg-img/v3.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                </div>
            </div>
            <!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="../frontend/img/bg-img/v5.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                </div>
            </div>
			<!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="../frontend/img/bg-img/v8.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                </div>
            </div>
			<!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="../frontend/img/bg-img/v7.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                </div>
            </div>

			<!-- Single Instagram Item -->
            <div class="single-instagram-item">
                <img src="../frontend/img/bg-img/v28.jpg" alt="">
                <div class="instagram-hover-content text-center d-flex align-items-center justify-content-center">
                </div>
            </div>
        </div>
    </div>




    <!-- Footer Area Start -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-content d-flex align-items-center justify-content-between">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p>Thanks for visting! </p>
                        </div>
                        <!-- Footer Logo -->

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->


    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="../frontend/js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="../frontend/js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="../frontend/js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="../frontend/js/alime.bundle.js"></script>
    <!-- Active -->
    <script src="../frontend/js/default-assets/active.js"></script>

</body>

</html>
