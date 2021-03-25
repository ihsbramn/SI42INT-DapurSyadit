<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Dapur Syadit</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{URL::to('/')}}/informationassets/css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="{{URL::to('/')}}/informationassets/css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="{{URL::to('/')}}/informationassets/css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="{{URL::to('/')}}/informationassets/css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout Contact_page">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{URL::to('/')}}/informationassets//images/loading.gif" alt="" /></div>
    </div>

    <div class="wrapper">
        <!-- end loader -->

        <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">

                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">Order</a>
                    </li>
                    <li>
                        <a href="about.html">History</a>
                    </li>
                    <li>
                        <a href="about.html">Menu</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li class="active">
                        <a href="contact.html">Contact Us</a>
                    </li>
                    <li>
                        <a href="recipe.html">FAQ</a>
                    </li>
                </ul>

            </nav>
        </div>

        <div id="content">
            <!-- header -->
            <header>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="full">
                                <a class="logo" href="index.html"><img
                                        src="{{URL::to('/')}}/informationassets/images/title.png"
                                        alt="DAPUR SYADIT" /></a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="full">
                                <div class="right_header_info">
                                    <ul>
                                        <li class="dinone">Contact Us : <img
                                                style="margin-right: 15px;margin-left: 15px;"
                                                src="{{URL::to('/')}}/informationassets/images/phone_icon.png"
                                                alt="#"><a href="#">666</a></li>
                                        <li class="dinone"><img style="margin-right: 15px;"
                                                src="{{URL::to('/')}}/informationassets/images/mail_icon.png" alt="#"><a
                                                href="#">dapursyadit@gmail.com</a></li>
                                        <li class="dinone"><img
                                                style="margin-right: 15px;height: 21px;position: relative;top: -2px;"
                                                src="{{URL::to('/')}}/informationassets/images/location_icon.png"
                                                alt="#"><a href="#">Tegal, Jawa Tengah</a></li>
                                        <li class="button_user"><a class="button active" href="#">Login</a><a
                                                class="button" href="#">Register</a></li>
                                        <li><img style="margin-right: 15px;"
                                                src="{{URL::to('/')}}/informationassets/images/search_icon.png" alt="#">
                                        </li>
                                        <li>
                                            <button type="button" id="sidebarCollapse">
                                                <img src="{{URL::to('/')}}/informationassets/images/menu_icon.png"
                                                    alt="#">
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end header -->
            <!-- footer -->
            <fooetr>
                <div class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class=" col-md-12">
                                <h2>Customer<strong class="white"> Information</strong></h2>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                                <form class="main_form">
                                    <div class="row">

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <input class="form-control" placeholder="Name" type="text" name="Name">
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <input class="form-control" placeholder="Email" type="text" name="Email">
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <input class="form-control" placeholder="Phone" type="text" name="Phone">
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <input class="form-control" placeholder="Address" type="text"
                                                name="Address">
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <textarea class="textarea" placeholder="Description" type="text"
                                                name="Description"></textarea>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <button class="send">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="img-box">
                                    <figure><img src="{{URL::to('/')}}/informationassets/images/catering.jpeg"
                                            alt="img" /></figure>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="footer_logo">
                                    <a href="index.html"><img src="{{URL::to('/')}}/informationassets/images/logo1.jpg"
                                            alt="logo" /></a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <ul class="lik">
                                    <li> <a href="index.html">Home</a></li>
                                    <li> <a href="index.html">Order</a></li>
                                    <li> <a href="index.html">History</a></li>
                                    <li> <a href="recipe.html">Menu</a></li>
                                    <li> <a href="about.html">About</a></li>
                                    <li class="active"> <a href="contact.html">Contact us</a></li>
                                    <li> <a href="about.html">FAQ</a></li>

                                </ul>
                            </div>
                            <div class="col-md-12">
                                <div class="new">
                                    <h3>Newsletter</h3>
                                    <form class="newtetter">
                                        <input class="tetter" placeholder="Your email" type="text" name="Your email">
                                        <button class="submit">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="copyright">
                        <div class="container">
                            <p></a>Dapur Syadit 2021</p>
                        </div>
                    </div>
                </div>
            </fooetr>
            <!-- end footer -->

        </div>
    </div>
    <div class="overlay"></div>
    <!-- Javascript files-->
    <script src="{{URL::to('/')}}/informationassets/js/jquery.min.js"></script>
    <script src="{{URL::to('/')}}/informationassets/js/popper.min.js"></script>
    <script src="{{URL::to('/')}}/informationassets/js/bootstrap.bundle.min.js"></script>
    <script src="{{URL::to('/')}}/informationassets/js/owl.carousel.min.js"></script>
    <script src="{{URL::to('/')}}/informationassets/js/custom.js"></script>
    <script src="{{URL::to('/')}}/informationassets/js/jquery.mCustomScrollbar.concat.min.js"></script>

    <script src="js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });

    </script>

</body>

</html>
