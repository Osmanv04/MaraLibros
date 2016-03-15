<!DOCTYPE html>
<html>
<head>
    <title>MaraLibros C.A</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Custom Theme files -->
    <script src="js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- header-section-starts -->
<div class="full">

    <div class="main">
        <div class="header">
            <div class="top-header">
                <div class="logo">
                    <a href="index.html"><img src="images/logo.png" alt="" /></a>
                    <p>MaraLibros C.A </p>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Inicio</a></li>


                        <li><a href="#about">Catalogo</a></li>
                        <li><a href="#contact">Contactenos</a></li>
                        <li><a href="#contact">Iniciar Sesion</a></li>
                    </ul>
                    <div class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Buscar Libro...">

                        </div>
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>

                    </div>
                </div><!--/.nav-collapse -->

            </div>
            <div class="more-reviews">
                <ul id="flexiselDemo2">
                    <li><img src="images/m1.jpg" alt=""/></li>
                    <li><img src="images/m2.jpg" alt=""/></li>
                    <li><img src="images/m3.jpg" alt=""/></li>
                    <li><img src="images/m5.jpg" alt=""/></li>
                </ul>
                <script type="text/javascript">
                    $(window).load(function() {

                        $("#flexiselDemo2").flexisel({
                            visibleItems: 4,
                            animationSpeed: 1000,
                            autoPlay: true,
                            autoPlaySpeed: 3000,
                            pauseOnHover: false,
                            enableResponsiveBreakpoints: true,
                            responsiveBreakpoints: {
                                portrait: {
                                    changePoint:480,
                                    visibleItems: 2
                                },
                                landscape: {
                                    changePoint:640,
                                    visibleItems: 3
                                },
                                tablet: {
                                    changePoint:768,
                                    visibleItems: 3
                                }
                            }
                        });
                    });
                </script>
                <script type="text/javascript" src="js/jquery.flexisel.js"></script>
            </div>
            <!--
            <div class="review-slider">
                <ul id="flexiselDemo1">
                    <li><img src="images/r1.jpg" alt=""/></li>
                    <li><img src="images/r2.jpg" alt=""/></li>
                    <li><img src="images/r3.jpg" alt=""/></li>
                    <li><img src="images/r4.jpg" alt=""/></li>
                    <li><img src="images/r5.jpg" alt=""/></li>
                    <li><img src="images/r6.jpg" alt=""/></li>
                </ul>
                <script type="text/javascript">
                    $(window).load(function() {

                        $("#flexiselDemo1").flexisel({
                            visibleItems: 6,
                            animationSpeed: 1000,
                            autoPlay: true,
                            autoPlaySpeed: 3000,
                            pauseOnHover: false,
                            enableResponsiveBreakpoints: true,
                            responsiveBreakpoints: {
                                portrait: {
                                    changePoint:480,
                                    visibleItems: 2
                                },
                                landscape: {
                                    changePoint:640,
                                    visibleItems: 3
                                },
                                tablet: {
                                    changePoint:768,
                                    visibleItems: 4
                                }
                            }
                        });
                    });
                </script>
                <script type="text/javascript" src="js/jquery.flexisel.js"></script>
            </div>
            -->
        </div>

        <div class="news">
            <div class="col-md-6 news-left-grid">
                <h3>Whar?,</h3>
                <h2>Book your ticket now!</h2>
                <h4>Easy, simple & fast.</h4>
                <a href="#"><i class="book"></i>BOOK TICKET</a>
                <p>Get Discount up to <strong>10%</strong> if you are a member!</p>
            </div>
            <div class="col-md-6 news-right-grid">
                <h3>News</h3>
                <div class="news-grid">
                    <h5>Lorem Ipsum Dolor Sit Amet</h5>
                    <label>Nov 11 2014</label>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                </div>
                <div class="news-grid">
                    <h5>Lorem Ipsum Dolor Sit Amet</h5>
                    <label>Nov 11 2014</label>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
                </div>
                <a class="more" href="#">MORE</a>
            </div>
            <div class="clearfix"></div>
        </div>

    </div>
</div>
<div class="clearfix"></div>
</body>
</html>