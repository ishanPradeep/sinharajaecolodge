<!DOCTYPE html>
<html lang="en">
<head>

<title>Sinharaja Eco Lodge</title>
<!-- custom-theme -->
@if(! empty($meta_keywords))
    <meta name="meta_keywords" content="{{$meta_keywords}}">
@endif


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Edifying Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- gallery -->
<link href="css/lsb.css" rel="stylesheet" type="text/css">
<!-- //gallery -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<!-- slider -->
<link rel="stylesheet" type="text/css" href="css/zoomslider.css" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!-- slider -->
<link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">

<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans');

    /* Basic styling */
    html, body {
        margin: 0;
        padding: 0;
        background-color: #fff;
        font-family: 'Open Sans', sans-serif;
        line-height: 1.4;
    }
    h1, h2, h3, h4, h5, h6 {
        font-weight: normal;
        font-style: italic;
    }
    code {
        display: block;
        background-color: #eee;
        padding: 2em;
        overflow: scroll;
        white-space: nowrap;
    }
    .body {
        max-width: 800px;
        padding: 40px;
        margin: 0 auto;
    }
    .zs-slideshow::after { 
        content: ""; 
        position: absolute; 
        top: 0; left: 0; 
        width: 100%; 
        height: 100%; 
        z-index: 100; 
        background: #0005 !important; 
    } 
    body,html { 
        font-family: sans-serif; 
        font-weight: 400; 
    }
    .meta {
        margin: 0 0 40px 0;
        font-size: 0.8em;
    }
    .properties-table {
        width: 100%;
        padding: 0;
        border-spacing: 0;
        margin-top: 2em;
        font-size: .85em;
        background-color: #eee;
    }
    .properties-table th, .properties-table td {
        text-align: left;
        padding: 10px;
    }
    .properties-table th {
        border-bottom: 1px solid #333;
        line-height: 2;
    }
    /* End Basic styling */

    
    #demo-1 {
        position: relative; /* can either be relative, absolute or fixed. If position is not set (i.e. static), it would be set to "relative" by script */
        overflow: hidden; /* to bound the empty top space created by inner element's top margin */
        width: 100%;
        min-height: 400px;
        background-color: #999;
    }
    .demo-inner-content {
        position: relative; /* if position is not set, the script will set it to 'relative'. */
        z-index: 2; /* if z-index is not set, the script will set it to '2'. */
        margin: 180px auto;
        padding: 40px;
        max-width: 600px;
        color: #fff;
        text-align: center;
        font-size: 1.5em;
    }
    .demo-inner-content h1 {
        font-size: 2.5em;
        margin: 0;
    }
</style>

</head>

<body>
    <div class="banner" id="demo-1" data-zs-src='["{{'slider/'.$slider->back_image1}}","{{'slider/'.$slider->back_image2}}","{{'slider/'.$slider->back_image3}}"]' data-zs-overlay="dots">
      
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
            <div style="z-index: 55" class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <nav class="link-effect-2" id="link-effect-2">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/"><span data-hover="Home">Home</span></a></li>
                        <li><a href="/gallery"><span data-hover="Gallery">Gallery</span></a></li>
                        <li><a href="/about-us"><span data-hover="About">About</span></a></li>
                        <!-- <li><a href="services.php"><span data-hover="About">About</span></a></li> -->
                       {{--  <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span data-hover="About">About</span> <b class="caret"></b></a>
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



                        <li><a href="/contact"><span data-hover="Packages">Packages</span></a></li>
                    </ul>
                </nav>
            </div>
        </nav>
        {{-- <div class="w3_agile_phone">
             <ul class="agileinfo_social_icons">
                <img class="image" src="{{ asset('images/phone-call.png') }}" width="40" style="float: left;" />
                <p class="phone">{{$slider->contact_number1}}</p>
                <p class="phone">{{$slider->contact_number2}}</p>
                <p class="email">{{$slider->email}}</p>
            </ul>
        </div> --}}


            @if (isset($slider))
                <img src="{{ asset('slider/'.$slider->logo_image) }}" width="195" style="margin-left: 5%; margin-top: 35px;" />            
            @endif



        <div class="container">
            <div class="agile_banner_info">
                <div class="agile_banner_info1">
                    @if (isset($slider))
                    <?php

                        $exp = explode(" ", $slider->banner_info_title);

                        if(count($exp)>3){
                            $str = preg_replace("/^(\w+\s)/", "", $slider->banner_info_title);
                            $str = preg_replace("/^(\w+\s)/", "", $str);
                            $str = preg_replace("/^(\w+\s)/", "", $str);
                        ?>

                            <h3>{{$exp[0].' '.$exp[1].' '.$exp[2].' '}}<span>{{$str}} </span></h3>
                        <?php
                        }else{
                        ?>
                            <h3>{{$slider->banner_info_title}}</h3>
                        <?php 
                        }
                    ?>


            

                    <div id="typed-strings" class="agileits_w3layouts_strings">

                    {{-- info1 --}}

                    <?php
                        $exp = explode(" ", $slider->banner_info1);

                        if(count($exp)>2){
                            $str = preg_replace("/^(\w+\s)/", "", $slider->banner_info1);
                            $str = preg_replace("/^(\w+\s)/", "", $str);
                            $str = preg_replace("/^(\w+\s)/", "", $str);
                        ?>

                            <p>{{$exp[0].' '.$exp[1].' '}}<i>{{$str}} </i></p>
                        <?php
                        }else{
                        ?>
                            <p>{{$slider->banner_info1}}</p>
                        <?php 
                        }
                    ?>
                    {{-- info1 --}}
                    {{-- info2 --}}
                    <?php

                        $exp = explode(" ", $slider->banner_info2);

                        if(count($exp)>3){
                            $str = preg_replace("/^(\w+\s)/", "", $slider->banner_info2);
                            $str = preg_replace("/^(\w+\s)/", "", $str);
                            $str = preg_replace("/^(\w+\s)/", "", $str);
                        ?>
                            <p>{{$exp[0].' '.$exp[1].' ' }}<i>{{$exp[2]}}</i>{{$str}}</p>
                        <?php
                        }else{
                        ?>
                            <p>{{$slider->banner_info2}}</p>
                        <?php 
                        }
                    ?>
                    {{-- info2 --}}
                    {{-- info3 --}}
                    <?php

                        $exp = explode(" ", $slider->banner_info3);

                        if(count($exp)>2){
                            $str = preg_replace("/^(\w+\s)/", "", $slider->banner_info3);
                            $str = preg_replace("/^(\w+\s)/", "", $str);
                            $str = preg_replace("/^(\w+\s)/", "", $str);
                        ?>
                            <p><i>{{$exp[0].' '.$exp[1].' ' }}</i>{{$str}}</p>
                        <?php
                        }else{
                        ?>
                            <p>{{$slider->banner_info3}}</p>
                        <?php 
                        }
                    ?>
                    {{-- info3 --}}
                    </div>
                    <span id="typed" style="white-space:pre;"></span>

                @else
                
                @endif
                </div>
            </div>
           <!--  <div class="discription">
                <p>The Pavarone Eco Lodge Sinharaja offers comfortable accommodation </p>
                <p style="margin-left: 25%;"> in the outskirts of the Sri Lanka rainforest of Sinharaja.</p>
            </div> -->

                <img src="{{ asset('images/translations5.png') }}" width="150" style="position: absolute; margin-left: 75%; top: 45%;" />  

            <div class="banner_agile_para" style="margin-top:13%">

            </div>
            <div class="w3_agile_social_icons">
                <ul class="agileinfo_social_icons">
                    <li><a href="{{$slider->link_for_facebook}}" class="w3_agileits_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="{{$slider->link_for_agoda}}" class="agoda"><i class="agoda"></i><img src="{{ asset('images/agoda.png') }}" width="20"></a></li>
                    <li><a href="{{$slider->link_for_booking}}" class="booking"><i class="booking"></i>B.</a></li>
                    <li><a href="{{$slider->link_for_tripadvisor}}" class="color_tripadvisor"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a></li>

                </ul>
            </div>
            <div class="w3_banner_color">
                <span></span>
            </div>
            <!-- <div class="w3_scroll_arrow">
              <a href="#team" class="scroll scroll-down"><span class="dot"> </span></a>
            </div> -->
        </div>
    </div>
<!-- //banner --> 

  @yield('home')



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
                                <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>{{$slider->contact_number1}} &nbsp;&nbsp;&nbsp; {{$slider->contact_number2}}
                                </li>
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


             {{-- <div class="w3_agileits_copy_right_social">
               <div class="col-md-6 agileits_w3layouts_copy_right">
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
            </div>--}}
        </div>
    </div>
<!-- //footer -->

<!-- carousal -->
    <script src="js/slick.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).on('ready', function() {
          $(".center").slick({
            dots: true,
            infinite: true,
            centerMode: true,
            slidesToShow: 2,
            slidesToScroll: 2,
            responsive: [
                {
                  breakpoint: 768,
                  settings: {
                    arrows: true,
                    centerMode: false,
                    slidesToShow: 2
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    arrows: true,
                    centerMode: false,
                    centerPadding: '40px',
                    slidesToShow: 1
                  }
                }
             ]
          });
        });
    </script>
<!-- //carousal -->
<!-- flexisel -->
        <script type="text/javascript">
        $(window).load(function() {
            $("#flexiselDemo1").flexisel({
                visibleItems: 4,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,            
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: { 
                    portrait: { 
                        changePoint:480,
                        visibleItems: 1
                    }, 
                    landscape: { 
                        changePoint:640,
                        visibleItems:2
                    },
                    tablet: { 
                        changePoint:768,
                        visibleItems: 2
                    }
                }
            });
            
        });
    </script>
    <script type="text/javascript" src="js/jquery.flexisel.js"></script>
<!-- //flexisel -->
<!-- gallery-pop-up -->
    <script src="js/lsb.min.js"></script>
    <script>
    $(window).load(function() {
          $.fn.lightspeedBox();
        });
    </script>
<!-- //gallery-pop-up -->
<!-- flexSlider -->
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript">
        $(window).load(function(){
          $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider){
              $('body').removeClass('loading');
            }
          });
        });
    </script>
<!-- //flexSlider -->
<!-- banner-type-text -->
    <script src="js/typed.js" type="text/javascript"></script>
    <script>
        $(function(){

            $("#typed").typed({
                // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
                stringsElement: $('#typed-strings'),
                typeSpeed: 30,
                backDelay: 500,
                loop: false,
                contentType: 'html', // or text
                // defaults to false for infinite loop
                loopCount: false,
                callback: function(){ foo(); },
                resetCallback: function() { newTyped(); }
            });

            $(".reset").click(function(){
                $("#typed").typed('reset');
            });

        });

        function newTyped(){ /* A new typed object */ }

        function foo(){ console.log("Callback"); }
    </script>
<!-- //banner-type-text -->
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
    
<!-- slider -->
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
<script type="text/javascript" src="js/jquery.zoomslider.min.js"></script>


   

<!-- slider -->
</body>
</html>
