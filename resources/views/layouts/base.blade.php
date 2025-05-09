
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>ANDRES SALAZAR</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">




        <link rel="stylesheet" href="assets/css/navmenu/styles.css">
        <link rel="stylesheet" href="assets/css/portfolio.jquery.css">
        <link rel="stylesheet" href="assets/css/fonticons.css">
        <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="assets/fonts/stylesheet.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/lightbox2@2.11.1/dist/css/lightbox.min.css" rel="stylesheet">

       

        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

        @livewireStyles
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!--Home page style-->
        <nav>
            <div class="container">
                <div class="nav-top clearfix">
                    <div class="logo">
                        <a  href="" class="navbar-brand"><img src="assets/images/logo.png" alt="Logo" /></a>
                    </div>

                    <div class="head_top_social pull-right">
                        <ul class="list-inline">
                            <li><a href=""><i class=""></i>Musikkurse</a></li>
                            <li><a href=""><i class="fa fa-phone"></i> 045 608 65</a></li>

                            <li><a href="{{ url('lang/es') }}">🇪🇸</a></li>
                            <li><a href="{{ url('lang/de') }}">🇩🇪</a></li>
                            <li><a href="{{ url('lang/en') }}">🇬🇧</a></li>
                            
                            <li class="top_socail">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-whatsapp"></i></a>
                            </li>

                        </ul>
                    </div>

                    <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                        <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
                    </button>

                </div>
            </div>

            <div class="main-nav navbar-collapse collapse">
                <div class="container">
                    <div class="minilogo">
                        <a  href="" class="navbar-brand"><img src="assets/images/logo2.png" alt="Logo" /></a>
                    </div>
                    <ul class="nav nav-justified">
                        <li><a wire:navigate class="active" href="{{route('home')}}">HOME</a></li>
                        <li><a wire:navigate href="{{route('services')}}">SERVICES</a></li>
                        <li><a wire:navigate href="{{route('portfolio')}}">PORTFOLIO</a></li>
                        <li><a wire:navigate href="{{route('event')}}">NEWS</a></li>
                        <li><a href="#blog">BLOG</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </nav>






      {{$slot}}

       



        <section id="footer_widget" class="footer_widget">
            <div class="container">
                <div class="row">
                    <div class="main_widget">


                        <div class="row">
                            <div class="col-sm-4">
                                <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                    <div class="footer_logo">
                                        <img src="assets/images/logo2.png" alt="" />
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in egestas lectus. 
                                        Etiam tempor odio tellus, at bibendum neque faucibus quis. Sed vel facilisis elit. </p>
                                    <p>Nullam fringilla pharetra diam non accumsan. Morbi eget aliquam mauris. 
                                        Etiam vehicula efficitur mi.</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                    <h4 class="footer_title">CONTACT</h4>
                                    <div class="separator3"></div>
                                    <ul>
                                        <li><a href=""><i class="fa fa-envelope"></i> info@guitarlessons.com</a></li>
                                        <li><a href=""><i class="fa fa-phone"></i> 0123 456 789 0112</a></li>
                                        <li><a href=""><i class="fa fa-map-marker"></i> Greenplatz Ben 29, Germany 60435</a></li>
                                        <li><a href=""><i class="fa fa-fax"></i> (0012) 654 356 445</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                    <h4 class="footer_title">LATEST NEWS</h4>

                                    
                                    <div class="separator3"></div>
                                    <ul>
                                        <li class="single_latest_news">
                                            <p class="latest_date">02.08.2015</p>
                                            <p class="subtitle">Etiam tempor odio tellus.</p>
                                            <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in egestas lectus. Etiam tempor odio tellus.</p>
                                        </li>

                                        <li class="single_latest_news">
                                            <p class="latest_date">02.08.2015</p>
                                            <p class="subtitle">Etiam tempor odio tellus.</p>
                                            <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in egestas lectus. Etiam tempor odio tellus.</p>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </section>





        <footer id="footer" class="footer">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 col-sm-12">
                        <div class="copyright_text text-center">
                            <p class="wow fadeInRight" data-wow-duration="1s">
                                 <strong>Andrés Salazar</strong>. Todos los derechos reservados.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



        <!-- START SCROLL TO TOP  -->

        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/jquery.easypiechart.min.js"></script>
        <script src="assets/js/portfolio.jquery.js"></script>
        <script src="assets/js/jquery.mixitup.min.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/js/jquery.slicknav.min.js"></script>
        <!--This is link only for gmaps-->
        <script src="http://maps.google.com/maps/api/js"></script>
        <script src="assets/js/gmaps.min.js"></script>
        <script>
            var map = new GMaps({
                el: '.ourmaps',
                scrollwheel: false,
                lat: -12.043333,
                lng: -77.028333
            });
        </script>



        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
        !-- Lightbox JS -->
        <script src="https://cdn.jsdelivr.net/npm/lightbox2@2.11.1/dist/js/lightbox.min.js"></script>
        @livewireScripts

    </body>
</html>
