<!DOCTYPE html>
<html lang="en">
<head>
<title>Sinharaja Eco Lodge</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Edifying Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/about/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet"></head>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>
<!-- banner -->
	
    <div class="banner1" style="height: 239px; background-image:url( {{empty(asset('images/1.jpeg')) ? '' : (asset('images/1.jpeg'))}})">
        <nav class="navbar navbar-default">
            <div class="navbar-header navbar-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
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
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav class="link-effect-2" id="link-effect-2">
                    <ul class="nav navbar-nav">
                        <li><a href="/"><span data-hover="Home">Home</span></a></li>
                        <li><a href="/gallery"><span data-hover="Gallery">Gallery</span></a></li>
                        <li><a href="/about-us"><span data-hover="About">About</span></a></li>

                   {{--  <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="About Us">About Us</span> <b class="caret"></b></a>
                            <ul class="dropdown-menu agile_short_dropdown">
                                <li><a href="/about-us">About Us</a></li>
                                <li><a href="/about-sinharaja">About Sinharaja</a></li>
                            </ul>
                        </li> --}}
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
                </nav>
            </div>
           
       {{--  <div class="w3_agile_phone">
             <ul class="agileinfo_social_icons">
                <img class="image" src="{{ asset('images/phone-call.png') }}" width="40" style="float: left;" />
                <p class="phone">{{$slider->contact_number1}}</p>
                <p class="phone">{{$slider->contact_number2}}</p>
                <p class="email">{{$slider->email}}</p>
            </ul>
        </div> --}}


        </nav>
        {{-- <div class="wthree_banner1_info">
            <div class="container">
                <h3><span>Mail</span> Us</h3>
            </div>
        </div >--}}
    </div>
<!-- //banner -->	

  @yield('mail')

<!-- footer -->
    <div class="footer">
        <div class="container">
           {{--  <h2>Subscribe to <span>Newsletter</span></h2>
            <form action="#" method="post">
                <input type="email" name="Email" placeholder="Enter Your Email..." required="">
                <input type="submit" value="Send">
            </form> --}}
            <div class="agile_footer_copy">
                <div class="w3agile_footer_grids">
                    <div class="col-md-4 w3agile_footer_grid">
                        <h3>About Us</h3>

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
                            <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="#">Attractions</a></li>
                            <li><span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span><a href="/contact">Packages</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
           {{--  <div class="w3_agileits_copy_right_social">
                <div class="col-md-6 agileits_w3layouts_copy_right">
                    <!-- <p>&copy; 2017 Edifying. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p> -->
                </div>
                <div class="col-md-6 w3_agile_copy_right">
                    <ul class="agileinfo_social_icons">
                        @if (isset($slider))
                            <li><a href="{{$slider->link_for_facebook}}" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="{{$slider->link_for_agoda}}" class="agoda"><i class="agoda"></i><img src="{{ asset('images/agoda.png') }}" width="20"></a></li>
                            <li><a href="{{$slider->link_for_booking}}" class="booking"><i class="booking"></i>B.</a></li>
                            <li><a href="{{$slider->link_for_tripadvisor}}" class="color_tripadvisor"><i class="fa fa-tripadvisor" aria-hidden="true"></i></li>
                        @endif
                    </ul>
                </div>
            </div> --}}
        </div>
    </div>
<!-- //footer -->

<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>