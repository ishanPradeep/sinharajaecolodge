@extends('layouts.about')    
@section('about')


    <!-- banner -->

    <div class="about-page-w3ls py-5">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="tittle mb-xl-5 mb-4 text-dark text-center">
                        <span class="text-uppercase">About</span>What We Offer</h3>
            <div class="row mt-md-4 pt-4">
                <div class="col-lg-6 about-w3layouts">
                    <img src="{{ asset('thumbnail/'.$us->image) }}" alt=" " class="img-fluid" width="500" />

                </div>
                <div class="col-lg-6 about-w3layouts-right mt-lg-0 mt-5">
                    <h3 class="subheading-wthree mb-2">{{$us->title}}</h3>
                    <p>{!! nl2br(e($us->description)) !!}</p>
                </div>
            </div>
            
        </div>
    </div>  
    <!--/newsletter-->


    <section class="newsletter_right_w3agile  py-md-5 py-4" style="background-image:url( {{empty(asset('images/1.jpeg')) ? '' : (asset('images/1.jpeg'))}})">

        <div class="container">
            <div class="inner-sec-w3layouts py-md-5 py-3">
               <h3 class="tittle mb-xl-5 mb-4 text-center text-white">


                @if (isset($subscribe))
                    <?php
                        $split = explode(" ", $subscribe->title);
                    ?>
                    <span class="text-uppercase">{{preg_replace('/\W\w+\s*(\W*)$/', '$1', $subscribe->title)}}</span>{{$split[count($split)-1]}}</h3>

                @else
                    
                @endif


                @if(Session::has('success'))
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                            <div id="charge-message" class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                {{ Session::get('success') }}
                            </div>
                        </div>
                    </div>
                @endif
                @if(Session::has('warning'))
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                            <div id="charge-message" class="alert alert-warning text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                {{ Session::get('warning') }}
                            </div>
                        </div>
                    </div>
                @endif


                <div class="n-right-w3ls mt-md-4 pt-4">
                @if (isset($subscribe))
                    <p class="mb-5 text-white text-center"> {{$subscribe->description}}</p>
                    <form action="/newsletter" enctype="multipart/form-data" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group news-rt">
                                <input class="form-control" type="text" name="name" placeholder="Name" required="">
                                {!! $errors->first('name', '<span class="error-block">:message</span">') !!}

                            </div>
                            <div class="col-md-6 form-group news-lt">
                                <input class="form-control" type="email" name="email" placeholder=" Email Address" required="">
                                {!! $errors->first('email', '<span class="error-block">:message</span">') !!}

                            </div>
                        </div>
                        <div class="sbm-it mt-3">
                            <div class="form-group">
                                <input class="form-control submit text-uppercase" type="submit">
                            </div>
                        </div>
                    </form>
                @endif
                </div>
            </div>
        </div>
    </section>
    <!--//newsletter-->
    <!-- Team -->
    <div class="team py-5">
        <div class="container py-xl-5 py-lg-3">
            <h3 class="tittle mb-xl-5 mb-4 text-dark text-center">
                        <span class="text-uppercase">Team</span>Our Agents</h3>
            <div class="row agile_banner_bottom_grids mt-md-4 pt-4">
               
            <?php 
            foreach ($agents as $key => $value) {
                ?>
                    <div class="col-lg-3 col-sm-6 agile_banner_bottom_grid">
                        <div class="w3layouts_banner_bottom_grid">
                            <img src="{{ asset('thumbnail/'.$value->image) }}" alt=" " class="img-fluid" />
                            <div class="w3layouts_banner_bottom_grid_pos">
                                <p class="text-white py-2 px-4 mb-3">{{$value->name}}</p>
                                <div class="social-bnr-agileits py-2 px-3">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="{{$value->fb}}">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="mx-2">
                                            <a href="{{$value->twitter}}">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{$value->g_plus}}">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
            }
            ?>

               
            </div>
        </div>
    </div>
    <!-- //team -->

    @endsection
