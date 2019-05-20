
@extends('layouts.gallery')
    
@section('gallery')

    <!-- gallery -->
    <div class="agileits-services py-sm-5" id="gallery" style="margin-top: 5%">
        <div class="container py-lg-5 pt-3 pb-5">
            <div  style="margin-bottom: 5%;margin-top: 4%">
                <h4 class="tittle mb-xl-5 mb-4 text-center">
                    {{-- <span class="text-uppercase">Gallery</span>--}}
                </h4>  
                    <h2 class="tittle mb-xl-5 mb-4 text-center" style="font-size: 225%; font-family: auto;" >{{$aboutTrekking->title}}</h2>
            </div>

           
            <div style="margin-bottom: 6%;margin-top: 6%">
                    <p class="tittle mb-xl-5 mb-4 text-dark text-center">
                        {!! nl2br(e($aboutTrekking->description)) !!}</p>        
            </div>

                @if($trekkings)
                            <?php
                                foreach ($trekkings as $key => $value) {
                                    ?>
                                    <div class="col-sm-4  agileits_w3layouts_gallery_grid1 w3layouts_gallery_grid1 hover14">
                                        <div class="w3_agile_gallery_effect">

                                            <a href="{{ asset('thumbnail/'.$value->image) }}" class="sb" title="{{$value->description}}">
                                                <figure>
                                                     <figure>
                                                    <img src="{{ asset('thumbnail/'.$value->image) }}" alt=" " class="img-fluid" />
                                                </figure>
                                                </figure>
                                            </a>
                                        </div>
                                    </div>

                                    <?php
                                }
                            ?>


                @endif
        </div>
    </div>
    <!-- //gallery -->

@endsection
