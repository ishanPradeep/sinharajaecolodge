
@extends('layouts.gallery')
    
@section('gallery')

	<!-- gallery -->
    <div class="agileits-services py-sm-5" id="gallery" style="margin-top: 5%">
        <div class="container py-lg-5 pt-3 pb-5">
            <div class="w3ls_gallery_grids pt-md-5 pt-3">
                <div class="row agileits_w3layouts_gallery_grid" style="margin-bottom: 0%;">
                    
                 <div  style="margin-bottom: 4%">
                    <h2 class="tittle mb-xl-5 mb-4 text-center">
                        <span class="text-uppercase">Gallery</span></h2> 
                        {{-- <h2 class="tittle mb-xl-5 mb-4 text-center" style="font-size: 225%; font-family: auto;" >Event & Activities</h2> --}}
                </div>


                <?php
                    foreach ($eventActivity as $key => $value) {
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

                <?php
                    foreach ($galleryWaterfall as $key => $value) {
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


                <?php
                    foreach ($galleryFood as $key => $value) {
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
                    
                <?php
                    foreach ($galleryAccommodation as $key => $value) {
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
            
                <?php
                    foreach ($galleryTrekking as $key => $value) {
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
                    
                    <?php
                    foreach ($galleryCamping as $key => $value) {
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

                    


                    
                </div>
            </div>
        </div>
    </div>
    <!-- //gallery -->

@endsection
