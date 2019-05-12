@extends('layouts.app')
@section('home')


<!-- banner-bottom -->  

   <div class="banner-bottom">
        <div class="container">
            <div class="col-md-6 w3ls_banner_bottom_left">
                <div class="w3ls_banner_bottom_left1">
                    <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
                </div>

                @if (isset($adventure))
                <?php  $split = explode(" ", $adventure->title); ?>
                <div class="w3ls_banner_bottom_right1">
                            <h2>{{preg_replace('/\W\w+\s*(\W*)$/', '$1', $adventure->title)}} <span>{{$split[count($split)-1]}}</span> </h2>
                            
                            <?php
                                $string= strip_tags($adventure->description);
                                if ( strlen($string)>200 ){
                                   $stringCut = substr($string, 0, 200);
                                   $string =substr($stringCut, 0, strrpos($stringCut,' ')).'...';
                                }
                                echo $string;
                            ?>
                            <div class="w3l_more">
                                <a href="#" class="button button--nina" data-text="Learn more" data-toggle="modal" data-target="#myModal">
                                    <span>L</span><span>e</span><span>a</span><span>n</span> <span>m</span><span>o</span><span>r</span><span>e</span>
                                </a>
                            </div>
                        </div>
                @endif
                <div class="clearfix"> </div>
            </div>

            <!-- bootstrap-pop-up -->
            <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            {{$adventure->title}}
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                        
                        </div>
                        <section>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-7">
                                        <img src="{{ asset('thumbnail/'.$adventure->image1) }}" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="col-md-5">
                                        <p><i>{{$adventure->description}}</i></p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        <!-- //bootstrap-pop-up -->



            <div class="col-md-6 w3ls_banner_bottom_right">
                <section class="slider">
                    <div class="flexslider">
                        @if (isset($adventure))

                        <ul class="slides">
                            <li>    
                                <div class="agileits_w3layouts_banner_bottom_grid">
                                        <img src="{{ asset('thumbnail/'.$adventure->image1) }}" alt=" " class="img-responsive" style=" width: 400px; height: 450px;" />
                                </div>
                            </li>
                            <li>    
                                <div class="agileits_w3layouts_banner_bottom_grid">
                                        <img src="{{ asset('thumbnail/'.$adventure->image2) }}" alt=" " class="img-responsive" style=" width: 400px; height: 450px;" />
                                </div>
                            </li>
                            <li>    
                                <div class="agileits_w3layouts_banner_bottom_grid">
                                        <img src="{{ asset('thumbnail/'.$adventure->image3) }}" alt=" " class="img-responsive" style=" width: 400px; height: 450px;" />
                                </div>
                            </li>
                        </ul>
                        @endif
                    </div>
                </section>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
<!-- //banner-bottom --> 



    <div class="home-page-event" style="
    background: url({{ asset('thumbnail/'.$homePageEvent->image) }}) no-repeat 0px 0px;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    background-attachment: fixed;
" >

        <div class="container">
            <div class="col-md-6 w3layouts_register_left" style="margin-top: 10%;">
                @if (isset($homePageEvent))
                    <h3>
                            <?php
                                $split = explode(" ", $homePageEvent->title);
                            ?>
                            <span>{{preg_replace('/\W\w+\s*(\W*)$/', '$1', $homePageEvent->title)}}</span>
                            {{$split[count($split)-1]}}
                    </h3>

                    <p>{{$homePageEvent->description}}</p>
                @else

                @endif
            </div>
            <div class="col-md-6 w3layouts_register_right">
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
<!-- //register -->

<!-- gallery-top -->
    <div class="gallery-top">
        <div class="agileinfo_gallery_top">
        <?php
            $exp = explode(" ", $galleryInfo->description);

            if(count($exp)>3){
                $str = preg_replace("/^(\w+\s)/", "", $galleryInfo->description);
                $str = preg_replace("/^(\w+\s)/", "", $str);
                $str = preg_replace("/^(\w+\s)/", "", $str);
            ?>

                <h3><span>{{$exp[0].' '.$exp[1].' '.$exp[2].' '}}</span>{{$str}} </h3>
            <?php
            }else{
            ?>
                <h3>{{$galleryInfo->description}}</h3>
            <?php 
            }
        ?>

        </div>
    </div>
<!-- //gallery-top -->
<!-- gallery -->
    <div class="gallery">
        <ul id="flexiselDemo1"   style="height: 224px;"> 
            @foreach($gallerySlider as $value)

            <li>
                <div class="wthree_gallery_grid">
                    <a href="{{ asset('thumbnail/'.$value) }}" class="lsb-preview" data-lsb-group="header">
                        <div class="view second-effect">
                            <img src="{{ asset('thumbnail/'.$value) }}" alt="" class="img-responsive" />
                            <div class="mask">
                                <p>View</p>
                            </div>
                        </div>  
                    </a>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
<!-- //gallery -->

<div style="padding: 10%">
    <div>
         <h3 class="tittle mb-xl-5 mb-4 text-dark text-center">
                            <span class="text-uppercase">{{$ourVideo->title}}</span></h3>

    </div>
    <div style="margin-bottom: 6%;margin-top: 6%">
            <p class="tittle mb-xl-5 mb-4 text-dark text-center">{{$ourVideo->description}}</p>
        
    </div>
    <div class="row">
        <video controls width="450" class="col-md-4">
            <source src="{{ asset('thumbnail/'.$ourVideo->video1)}}"
                    type="video/webm">
            <source src="{{ asset('thumbnail/'.$ourVideo->video1)}}"
                    type="video/mp4">
        </video>

        <video controls width="450" class="col-md-4">
            <source src="{{ asset('thumbnail/'.$ourVideo->video2)}}"
                    type="video/webm">
            <source src="{{ asset('thumbnail/'.$ourVideo->video2)}}"
                    type="video/mp4">
        </video>

        <video controls width="450" class="col-md-4">
             <source src="{{ asset('thumbnail/'.$ourVideo->video3)}}"
                    type="video/webm">
            <source src="{{ asset('thumbnail/'.$ourVideo->video3)}}"
                    type="video/mp4">
        </video>


    </div>
</div>

<!-- testimonials -->
    <div class="testimonials">
        <div class="container">
            <div class="w3_agile_team_grid">
                <div class="w3_agile_team_grid_left">
                    <p>05</p>
                    <span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
                </div>
                <div class="w3_agile_team_grid_right">

                @if (isset($customerSay))
                <?php  $split = explode(" ", $customerSay->title); ?>
                    
                    <h3>{{preg_replace('/\W\w+\s*(\W*)$/', '$1', $customerSay->title)}} <span>{{$split[count($split)-1]}}</span> </h3>  
                @endif
                    <p>{{$customerSay->description}}</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="w3ls_testimonials_grids">
                 <section class="center slider">
                    @if (isset($customers))
                    <?php 
                        foreach ($customers as $key => $customer) {
                           ?>
                            <div class="agileits_testimonial_grid">
                                <div class="w3l_testimonial_grid">
                                    <p>{{$customer->says}}</p>
                                    <h4>{{$customer->name}}</h4>
                                    <h5>{{$customer->country}}</h5>
                                    <div class="w3l_testimonial_grid_pos">

                                        <img src={{ asset('thumbnail/'.$customer->image) }} class="img-responsive" />
                                    </div>
                                </div>
                            </div>
                           <?php
                        }
                    ?>

                    @endif
                </section>
            </div>
        </div>
    </div>
<!-- //testimonials -->

@endsection
