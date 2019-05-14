<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Sinharaja Eco Lodge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta name="keywords" content="Rambling Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- Custom Theme files -->

    <link href="{{ asset('css/gallery/bootstrap.css/') }}" type="text/css" rel="stylesheet" media="all">
    <link href="{{ asset('css/gallery/style.css/') }}" type="text/css" rel="stylesheet" media="all">
    <link href="{{ asset('css/style.css/') }}" type="text/css" rel="stylesheet" media="all">
    <link href="{{ asset('css/gallery/menufullpage.css/') }}" rel="stylesheet">

     <!-- gallery smoothbox  -->

    <link rel="stylesheet" href="{{ asset('css/smoothbox.css/') }}" type='text/css' media="all" />
    <!-- font-awesome icons -->
    <link href="{{ asset('css/font-awesome.css/') }}" rel="stylesheet">
     {{-- <link href="{{ asset('css/gallery/fontawesome-all.min.css/') }}" rel="stylesheet"> --}}
     <!-- //Custom Theme files -->
    <!-- online-fonts -->
   
    <link href="//fonts.googleapis.com/css?family=IBM+Plex+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext"
        rel="stylesheet">
    <!-- //online-fonts -->




{{-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /> --}}




</head>

<body>
    <!-- nav -->

    <nav id="menu" class="panel">
        <ul>
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a href="about.html">About</a>
            </li>
            <li>
                <a href="services.html">Services</a>
            </li>
            <li>
                <a href="gallery.html" class="active">Gallery</a>
            </li>
            <li>
                <a href="typo.html">Typography</a>
            </li>
            <li>
                <a href="contact.html">contact</a>
            </li>
           
        </ul>
    </nav>
    <!-- //nav -->



    <!-- banner -->

    <div class="banner1" style="height: 239px; background-image:url( {{empty(asset('images/1.jpeg')) ? '' : (asset('images/1.jpeg'))}})">
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
               
                <h1><a class="navbar-brand" href="/">
                    @if (isset($slider))
                        <?php
                            $split = explode(" ", $slider->banner_header);
                        ?>
                        <span>{{preg_replace('/\W\w+\s*(\W*)$/', '$1', $slider->banner_header)}}</span>{{$split[count($split)-1]}}
                    @else
                        <span>Sinharaja</span> Eco Lodge
                    @endif
                </a></h1>
            </div>

            <ul class="nav navbar-nav">
                <li><a href="/"><span data-hover="Home">Home</span></a></li>
                <li><a href="/gallery"><span data-hover="Gallery">Gallery</span></a></li>
                <li><a href="/about-us"><span data-hover="About">About</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="Attractions">Attractions</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu agile_short_dropdown">
                        <li><a href="{{ route('gallery-accommodation') }}">Accommodations</a></li>
                        <li><a href="{{ route('gallery-camping') }}">Campings</a></li>
                        <li><a href="{{ route('gallery-event_activities') }}">Event & Activities</a></li>
                        <li><a href="{{ route('gallery-foods') }}">Foods</a></li>
                        <li><a href="{{ route('gallery-trekking') }}">Trekkings</a></li>
                        <li><a href="{{ route('gallery-waterfalls') }}">Waterfalls</a></li>
                    </ul>
                </li>
                <li class="active"><a href="/contact"><span data-hover="Packages">Packages</span></a></li>

            </ul>


           
     <!--    <div class="w3_agile_phone">
             <ul class="agileinfo_social_icons">
                <img class="image" src="{{ asset('images/phone-call.png') }}" width="40" style="float: left;" />
                <p class="phone">{{$slider->contact_number1}}</p>
                <p class="phone">{{$slider->contact_number2}}</p>
                <p class="email">{{$slider->email}}</p>
            </ul>
        </div> -->


        </nav>
        {{-- <div class="wthree_banner1_info">
            <div class="container">
                <h3><span>Mail</span> Us</h3>
            </div>
        </div >--}}
    </div>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/about-us">About Us</a>
        </li>
        <li class="breadcrumb-item active"><a href="/about-sinharaja">About Sinharaja</a></li>
    </ol>

   @yield('about')
   


<!--footer-->
    <footer class="footer">
    {{-- <div class="py-lg-5 py-3"> --}}
        <div class="container">
            <div class="inner-sec-w3ls-agileits py-lg-5 py-3">
                <div class="row">
                    <div class="col-lg-4 w3agile_footer_grid text-left">
                        <h3 class="mb-4">About Us</h3>
                        <?php
                             if ($us->description) {
                                $string= strip_tags($us->description);
                                if ( strlen($string)>200 ){
                                   $stringCut = substr($string, 0, 250);
                                   $string =substr($stringCut, 0, strrpos($stringCut,' ')).'...';
                                }
                             }
                            ?>
                            <p>{{$string}}</p>
                    </div>

                    <div class="col-md-4 w3agile_footer_grid">
                        <h3>Contact Info</h3>
                        <ul>
                        @if (isset($slider))

                                <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>{{$slider->address}}</li>
                                <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="#">{{$slider->email}}</a></li>
                                <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>{{$slider->contact_number1}}</li>
                            @endif
                        </ul>
                    </div>
                     <div class="col-md-4 w3agile_footer_grid w3agile_footer_grid1">
                        <h3>Navigation</h3>
                        <ul>
                            <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="/">Home</a></li>
                            <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="/gallery">Gallery</a></li>
                            <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="/about-us">About Us</a></li>
                            <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="/contact">Mail Us</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!-- footer -->
                <div class="w3_agileits_copy_right_social">
                <div class="col-md-6 agileits_w3layouts_copy_right">
                    
                </div>
             {{--    <div class="col-md-6 w3_agile_copy_right">
                    <ul class="agileinfo_social_icons">
                        @if (isset($slider))
                            <li><a href="{{$slider->link_for_facebook}}" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="{{$slider->link_for_agoda}}" class="agoda"><i class="agoda"></i><img src="{{ asset('images/agoda.png') }}" width="20"></a></li>
                            <li><a href="{{$slider->link_for_booking}}" class="booking"><i class="booking"></i>B.</a></li>
                            <li><a href="{{$slider->link_for_tripadvisor}}" class="color_tripadvisor"><i class="fa fa-tripadvisor" aria-hidden="true"></i></li>
                        @endif
                    </ul>
                </div> --}}
                <div class="clearfix"> </div>
            </div>
            </div>
        </div>
    {{-- </div> --}}
    </footer>
    <!-- //footer -->

    <!-- js -->
    <script src="{{ asset('js/jquery-2.2.3.min.js') }}"></script>
    <!-- //js -->
    <!-- gallery smoothbox -->
    <script src="{{ asset('js/smoothbox.jquery2.js') }}"></script>
    <!-- navigation -->
    <script src="{{ asset('js/menuFullpage.min.js') }}"></script>
    <script src="{{ asset('js/expert.js') }}"></script>
    <!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
    <script src="{{ asset('js/move-top.js') }} "></script>
    <script src="{{ asset('js/easing.js') }} "></script>
    <script src="{{ asset('js/SmoothScroll.min.js ') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    
    
</body>
</html>