    <!DOCTYPE html>
    <html>

    <head>
        <!-- Basic -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Site Metas -->
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>Index customer</title>

        <!-- slider stylesheet -->
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="../customer/css/bootstrap.css" />

        <!-- fonts style -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap"
            rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="../customer/css/style.css" rel="stylesheet" />
        <!-- responsive style -->
        <link href="../customer/css/responsive.css" rel="stylesheet" />
    </head>

    <body>
        <div class="hero_area">
            <!-- header section strats -->
            <header class="header_section">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container">
                        <a class="navbar-brand" href="index.html">
                            <img src="../customer/images/logo.png" alt="" />
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home <span
                                            class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('customer/products') }}">Product</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact us</a>
                                </li>
                                @if (Session::has('cusEmail') && Session::get('cusID'))
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{ url('customer/profile') }}\{{ Session::get('cusID') }}">
                                            <i class="fas fa-user"></i> Hello, {{ Session::get('cusName') }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('customer/signout') }}">
                                            <i class="fas fa-sign-out-alt"></i> Logout
                                        </a>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('customer/registration') }}">
                                            <img src="../customer/image/user.png" alt="">
                                            <span>Register</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ url('customer/signin') }}">
                                            <i class="fas fa-sign-in-alt"></i> Login
                                        </a>
                                    </li>
                                @endif
                                <li class="nav-item">
                                    <form class="form-inline my-2 my-lg-0">
                                        <div class="input-group">
                                            <input class="form-control mr-sm-2" type="search" placeholder="Search"
                                                aria-label="Search">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="custom_menu-btn">
                            <button>
                                <span class="s-1"></span>
                                <span class="s-2"></span>
                                <span class="s-3"></span>
                            </button>
                        </div>
                    </nav>
                </div>
            </header>
            <!-- end header section -->
            <!-- slider section -->
            <section class="slider_section ">
                <div class="play_btn">
                    <a href="">
                        <img src="../customer/image//play.png" alt="">
                    </a>
                </div>
                <div class="number_box">
                    <div>
                        <ol class="carousel-indicators indicator-2">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3">04</li>
                        </ol>
                    </div>
                </div>
                <div class="container">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="detail-box">
                                            <h1>
                                                The Latest
                                                <span>
                                                    The latest electronic products
                                                </span>
                                            </h1>
                                            <p>
                                                Come to us where you can find the best electronics, where you can find
                                                the electronics you want the most. Welcome to our website.
                                            </p>
                                            <div class="btn-box">
                                                <a href="" class="btn-1">
                                                    Read More
                                                </a>
                                                <a href="" class="btn-2">
                                                    Contact us
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 img-container">
                                        <div class="img-box">
                                            <img src="../customer/image//slider-img.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="detail-box">
                                            <h1>
                                                The Latest
                                                <span>
                                                    The latest electronic products
                                                </span>
                                            </h1>
                                            <p>
                                                Come to us where you can find the best electronics, where you can find
                                                the electronics you want the most. Welcome to our website.
                                            </p>
                                            <div class="btn-box">
                                                <a href="" class="btn-1">
                                                    Read More
                                                </a>
                                                <a href="" class="btn-2">
                                                    Contact us
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 img-container">
                                        <div class="img-box">
                                            <img src="../customer/image//slider-img.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="detail-box">
                                            <h1>
                                                The Latest
                                                <span>
                                                    The latest electronic products
                                                </span>
                                            </h1>
                                            <p>
                                                Come to us where you can find the best electronics, where you can find
                                                the electronics you want the most. Welcome to our website.
                                            </p>
                                            <div class="btn-box">
                                                <a href="" class="btn-1">
                                                    Read More
                                                </a>
                                                <a href="" class="btn-2">
                                                    Contact us
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 img-container">
                                        <div class="img-box">
                                            <img src="../customer/image//slider-img.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="detail-box">
                                            <h1>
                                                The Latest
                                                <span>
                                                    The latest electronic products
                                                </span>
                                            </h1>
                                            <p>
                                                Come to us where you can find the best electronics, where you can find
                                                the electronics you want the most. Welcome to our website.
                                            </p>
                                            <div class="btn-box">
                                                <a href="" class="btn-1">
                                                    Read More
                                                </a>
                                                <a href="" class="btn-2">
                                                    Contact us
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 img-container">
                                        <div class="img-box">
                                            <img src="../customer/image//slider-img.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end slider section -->
        </div>


        <!-- about section -->

        <section class="about_section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="detail-box">
                            <div class="heading_container">
                                <h2>
                                    About Us
                                </h2>

                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut
                                labore et
                                dolore magna aliqua. Ut enim ad minim veniam
                            </p>
                            <a href="">
                                Read More
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-box">
                            <img src="../customer/image//about-img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end about section -->

        <!-- discount section -->

        <section class="discount_section  layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="detail-box">
                            <h2>
                                Hot products quality products
                            </h2>
                            <h2 class="main_heading">
                                50% DISCOUNT
                            </h2>

                            <div class="">
                                <a href="">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-box">
                            <img src="../customer/image//discount-img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- end discount section -->

        <!-- products -->
        <div class="products">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="titlepage">
                            <h2>Our Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 margin_bottom1">
                        <div class="product_box square_box">
                            <figure>
                                <img src="../customer/images/product1.png" alt="#" />
                            </figure>
                            <h3>Computer</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 margin_bottom1">
                    <div class="product_box square_box">
                        <figure> <img src="../customer/images/product2.png" alt="#" /> </figure>
                        <h3>Laptop</h3>
                    </div>
                </div>
                <div class="col-md-4 margin_bottom1">
                    <div class="product_box square_box">
                        <figure> <img src="../customer/images/product3.png" alt="#" /> </figure>
                        <h3>Tablet</h3>
                    </div>
                </div>
                <div class="col-md-4 margin_bottom1">
                    <div class="product_box square_box">
                        <figure> <img src="../customer/images/product4.png" alt="#" /> </figure>
                        <h3>Phone</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center"> <a class="btn btn-outline-dark" href="#">See
                                More</a> </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- end products -->
        <!-- info section -->
        <section class="info_section layout_padding2">
            <div class="container">
                <div class="info_logo">
                    <h2>
                        CONT
                    </h2>
                </div>
                <div class="row">

                    <div class="col-md-3">
                        <div class="info_contact">
                            <h5>
                                About Shop
                            </h5>
                            <div>
                                <div class="img-box">
                                    <img src="../customer/image//location-white.png" width="18px" alt="">
                                </div>
                                <p>
                                    Address
                                </p>
                            </div>
                            <div>
                                <div class="img-box">
                                    <img src="../customer/image//telephone-white.png" width="12px" alt="">
                                </div>
                                <p>
                                    +01 1234567890
                                </p>
                            </div>
                            <div>
                                <div class="img-box">
                                    <img src="../customer/image//envelope-white.png" width="18px" alt="">
                                </div>
                                <p>
                                    demo@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="info_form ">
                            <h5>
                                Newsletter
                            </h5>
                            <form action="">
                                <input type="email" placeholder="Enter your email">
                                <button>
                                    Subscribe
                                </button>
                            </form>
                            <div class="social_box">
                                <a href="">
                                    <img src="../customer/image//fb.png" alt="">
                                </a>
                                <a href="">
                                    <img src="../customer/image//twitter.png" alt="">
                                </a>
                                <a href="">
                                    <img src="../customer/image//linkedin.png" alt="">
                                </a>
                                <a href="">
                                    <img src="../customer/image//youtube.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end info_section -->
        <!-- footer section -->
        <section class="container-fluid footer_section ">
            <div class="container">
                <p>
                    &copy; 2019 All Rights Reserved By
                    <a href="https://html.design/">Free Html Templates</a>
                </p>
            </div>
        </section>
        <!-- end  footer section -->


        <script type="text/javascript" src="../customer/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="../customer/js/bootstrap.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
        </script>
        <script type="text/javascript">
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                navText: [],
                autoplay: true,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    420: {
                        items: 2
                    },
                    1000: {
                        items: 5
                    }
                }

            });
        </script>
        <script>
            var nav = $("#navbarSupportedContent");
            var btn = $(".custom_menu-btn");
            btn.click
            btn.click(function(e) {

                e.preventDefault();
                nav.toggleClass("lg_nav-toggle");
                document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
            });
        </script>
        <script>
            $('.carousel').on('slid.bs.carousel', function() {
                $(".indicator-2 li").removeClass("active");
                indicators = $(".carousel-indicators li.active").data("slide-to");
                a = $(".indicator-2").find("[data-slide-to='" + indicators + "']").addClass("active");
                console.log(indicators);

            })
        </script>

    </body>
    </body>

    </html>
