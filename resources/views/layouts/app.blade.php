<!doctype html>
<html lang="en">
<head>
    <!--meta tags-->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="portfolio template based on HTML5">
    <meta name="keywords" content="onepage, developer, resume, cv, personal, portfolio, personal resume, clean, modern">
    <meta name="author" content="MouriTheme">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--template title-->
    <title>MAHPOEN - Personal Portfolio HTML Template</title>

    <!--==========Favicon==========-->

    <link rel="apple-touch-icon" sizes="57x57" href="/temp/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/temp/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/temp/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/temp/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/temp/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/temp/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/temp/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/temp/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/temp/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/temp/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/temp/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/temp/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/temp/avicon/favicon-16x16.png">
    <link rel="manifest" href="/temp/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/temp/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!--========== Theme Fonts ==========-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,600,700,800" rel="stylesheet"> -->

    <!--Font Awesome css-->
    <link rel="stylesheet" href="/temp/css/font-awesome.min.css">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="/temp/css/bootstrap.min.css">

    <!--Animate css-->
    <link rel="stylesheet" href="/temp/css/animate.css">

    <!--Animated headline css-->
    <link rel="stylesheet" href="/temp/css/jquery.animatedheadline.css">
    
  <!--Owl carousel css-->
  <link rel="stylesheet" href="/temp/css/owl.carousel.css">
  <link rel="stylesheet" href="/temp/css/owl.theme.default.css">
    
  <!--Magnific popup css-->
  <link rel="stylesheet" href="/temp/css/magnific-popup.css">
    
  <!--Normalizer css-->
  <link rel="stylesheet" href="/temp/css/normalize.css">

    <!--Theme css-->
    <link rel="stylesheet" href="/temp/css/style.css">

    <!--Responsive css-->
    <link rel="stylesheet" href="/temp/css/responsive.css">
</head>
<body>

    <!--preloader starts-->


    <div class="loader_bg"><div class="loader"></div></div>


    <!--preloader ends-->

    <!--navigation area starts-->

    <header class="nav-area navbar-fixed-top">
        <div class="container">
            <div class="row">
                <!--main menu starts-->

                <div class="col-md-12">
                    <div class="main-menu">
                        <div class="navbar navbar-cus">
                            <div class="navbar-header">
                                <a href="index.html" class="navbar-brand"><span class="logo">mason</span></a> <!--edit site name here-->
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse">
                                <nav>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li>Привет, {{Auth::user()->email}}</li>
                                        <li class="active"><a href="#home">Home</a></li>
                                        <li><a href="#cars">Cars</a></li>
                                        <li><a href="#contact-form">Contact</a></li>
                                        <li><a href="{{url('logout')}}">Logout</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <!--main menu ends-->
            </div>
        </div>
    </header>
    <!--navigation area ends-->

    <!--Banner area starts-->

    <div class="banner-area" id="home">
        <div class="banner-table">
            <div class="banner-table-cell">
                <div class="welcome-text">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <section class="intro animate-scale">

                                    <h3>Welcome to My Website</h3>

                                    <h1 class="ah-headline">

                                        <span class="ah-words-wrapper">
                                            <b class="is-visible">Mason Smith</b> <!--edit the name to your name-->
                                            <b>Web Designer</b> <!--edit the designation if you are in different profession-->
                                            <b>Photographer</b> <!--edit the designation if you are in different profession-->
                                            <b>Web Developer</b> <!--edit the designation if you are in different profession-->
                                        </span>
                                    </h1>

                                    <a href="#contact" class="banner-btn">Contact me</a>


                                </section>

                                <div class="clearfix"></div>

                                <a class="mouse-scroll hidden-xs" href="#about">
                                    <span class="mouse">
                                        <span class="mouse-movement"></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<div id="cars">
@yield('content')
</div>

    <!--contact area ends-->

    <!--ГУГЛ КАРТА-->

<!--     <div class="brand-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-6 col-sm-3">
                    <div class="brand-logo-img wow fadeInDown" data-wow-delay="0.2s">
                        <img src="/temp/images/brand/brand-1.png" alt="brand image"> 
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 col-sm-3">
                    <div class="brand-logo-img wow fadeInDown" data-wow-delay="0.4s">
                        <img src="/temp/images/brand/brand-2.png" alt="brand image"> 
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 col-sm-3">
                    <div class="brand-logo-img wow fadeInDown" data-wow-delay="0.6s">
                        <img src="/temp/images/brand/brand-3.png" alt="brand image"> 
                    </div>
                </div>
                <div class="col-md-3 col-xs-6 col-sm-3">
                    <div class="brand-logo-img wow fadeInDown" data-wow-delay="0.8s">
                        <img src="/temp/images/brand/brand-4.png" alt="brand image"> 
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!--Brand area ends-->

    <!--Footer Area Starts-->

                            <div id="test-popup" class="white-popup mfp-with-anim mfp-hide">
                            <div class="row">
                                <div class="col-md-7 col-xs-12">
                                    <div class="por-img">
                                        <img src="/temp/images/portfolio/port1.png" alt="portfolio image" class="img-responsive"> <!--edit image-->
                                    </div>
                                </div>
                                <div class="col-md-5 col-xs-12">
                                    <div class="por-text">
                                        <h2>My Project Title</h2> <!--your project title-->
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, delectus deserunt eum eveniet, illo iste magni nobis non omnis quia</p>
                                        <div class="por-text-details">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <p>Client: </p>
                                                    <p>Completed:</p>
                                                    <p>Type:</p>
                                                    <p>link:</p>
                                                </div>
                                                <div class="col-xs-offset-1 col-xs-7">
                                                    <p>Дод ру</p> <!--edit here-->
                                                    <p>15/03/2018</p> <!--edit here-->
                                                    <p>WordPress Site</p> <!--edit here-->
                                                    <p>www.reebok.com</p> <!--edit here-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

             <div class="row">

                <div class="col-md-10 col-md-offset-1">

                    {!! Form::open(['url' => 'account']) !!}
                        <p>Ваше Имя</p>
                        {{Form::text('name')}}
                        <p>Ваш Email</p>
                        {{Form::text('email')}}
                        <p>Ваше сообщение разработчику</p>
                        {{Form::textarea('msg')}}
                        {{Form::submit('send')}}
                    {!! Form::close() !!}
                </div>

            </div>

    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <p>&copy; All Right Reserved By <a href="https://vk.com/ol9gang" target="_blank">Nikolaeva Olga</a></p> 
                </div>
            </div>
        </div>
    </div>

    <!--Latest version JQuery-->
    <script src="/temp/js/jquery-3.2.1.min.js"></script>

    <!--Bootstrap js-->
    <script src="/temp/js/bootstrap.min.js"></script>

  <!--Magnific popup js-->
  <script src="/temp/js/jquery.magnific-popup.js"></script>

  <!--Owl Carousel js-->
  <script src="/temp/js/owl.carousel.js"></script>

  <!--wow js-->
  <script src="/temp/js/wow.min.js"></script>

    <!--Animated headline js-->
    <script src="/temp/js/jquery.animatedheadline.js"></script>
    
    <!--Validator js-->
    <script src="/temp/js/jquery.waypoints.js"></script>
    
  <!--counter up js-->
  <script src="/temp/js/jquery.counterup.min.js"></script>

    <!--Validator js-->
    <script src="/temp/js/validator.js"></script>

    <!--Contact js-->
    <script src="/temp/js/contact.js"></script>

    <!--Main js-->
    <script src="/temp/js/main.js"></script>
    
    <script>

  </script>
</body>
</html>
