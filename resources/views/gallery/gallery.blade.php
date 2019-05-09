
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

                    <div class="col-sm-4  agileits_w3layouts_gallery_grid1 w3layouts_gallery_grid1 hover14" style="    margin-bottom: 10%;">
                        <div class="w3_agile_gallery_effect">
                            <div  style="margin-bottom: 4%">
                                {{-- <h4 class="tittle mb-xl-5 mb-4 text-center">
                                    <span class="text-uppercase">Gallery</span></h4>  --}}
                                    {{-- <h2 class="tittle mb-xl-5 mb-4 text-center" style="font-size: 225%; font-family: auto;" >Event & Activities</h2> --}}
                            </div>
                            <a href="images/g1.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <div class="gallery">
                                        <div class="wthree_gallery_grid">
                                            <a href="{{ route('gallery-event_activities') }}" class="lsb-preview" data-lsb-group="header">
                                                <div class="view second-effect">
                                                    <img class="img-responsive" src="{{asset('thumbnail/'.$eventActivity->image)}}">

                                                    <div class="mask">
                                                        <p>Event & Activities</p>
                                                    </div>
                                                </div>  
                                            </a>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>


                    <div class="col-sm-4  agileits_w3layouts_gallery_grid1 w3layouts_gallery_grid1 hover14" style="    margin-bottom: 10%;">
                        <div class="w3_agile_gallery_effect">
                            <div  style="margin-bottom: 4%">
                                {{-- <h4 class="tittle mb-xl-5 mb-4 text-center">
                                    <span class="text-uppercase">Gallery</span></h4>  --}}
                                   {{--  <h2 class="tittle mb-xl-5 mb-4 text-center" style="font-size: 225%; font-family: auto;" >Waterfalls</h2> --}}
                            </div>
                            <a href="images/g1.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <div class="gallery">
                                        <div class="wthree_gallery_grid">
                                            <a href="{{ route('gallery-waterfalls') }}" class="lsb-preview" data-lsb-group="header">
                                                <div class="view second-effect">
                                                    <img class="img-responsive" src="{{asset('thumbnail/'.$galleryWaterfall->image)}}">
                                                    <div class="mask">
                                                        <p>Waterfalls</p>
                                                    </div>
                                                </div>  
                                            </a>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>
          
                    <div class="col-sm-4  agileits_w3layouts_gallery_grid1 w3layouts_gallery_grid1 hover14" style="    margin-bottom: 10%;">
                        <div class="w3_agile_gallery_effect">
                            <div  style="margin-bottom: 4%">
                                {{-- <h4 class="tittle mb-xl-5 mb-4 text-center">
                                    <span class="text-uppercase">Gallery</span></h4>  --}}
                                    {{-- <h2 class="tittle mb-xl-5 mb-4 text-center" style="font-size: 225%; font-family: auto;" >Foods</h2> --}}
                            </div>
                            <a href="images/g1.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <div class="gallery">
                                        <div class="wthree_gallery_grid">
                                            <a href="{{ route('gallery-foods') }}" class="lsb-preview" data-lsb-group="header">
                                                <div class="view second-effect">
                                                    <img class="img-responsive" src="{{asset('thumbnail/'.$galleryFood->image)}}">
                                                    <div class="mask">
                                                        <p>Foods</p>
                                                    </div>
                                                </div>  
                                            </a>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>

           

                    <div class="col-sm-4  agileits_w3layouts_gallery_grid1 w3layouts_gallery_grid1 hover14" style="    margin-bottom: 10%;">
                        <div class="w3_agile_gallery_effect">
                            <div  style="margin-bottom: 4%">
                                {{-- <h4 class="tittle mb-xl-5 mb-4 text-center">
                                    <span class="text-uppercase">Gallery</span></h4>  --}}
                                    {{-- <h2 class="tittle mb-xl-5 mb-4 text-center" style="font-size: 225%; font-family: auto;" >Accommodation</h2> --}}
                            </div>
                            <a href="images/g1.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <div class="gallery">
                                        <div class="wthree_gallery_grid">
                                            <a href="{{ route('gallery-accommodation') }}" class="lsb-preview" data-lsb-group="header">
                                                <div class="view second-effect">
                                                    <img class="img-responsive" src="{{asset('thumbnail/'.$galleryAccommodation->image)}}">
                                                    <div class="mask">
                                                        <p>Accommodation</p>
                                                    </div>
                                                </div>  
                                            </a>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4  agileits_w3layouts_gallery_grid1 w3layouts_gallery_grid1 hover14" style="    margin-bottom: 10%;">
                        <div class="w3_agile_gallery_effect">
                            <div  style="margin-bottom: 4%">
                                {{-- <h4 class="tittle mb-xl-5 mb-4 text-center">
                                    <span class="text-uppercase">Gallery</span></h4>  --}}
                                    {{-- <h2 class="tittle mb-xl-5 mb-4 text-center" style="font-size: 225%; font-family: auto;" >Trekking</h2> --}}
                            </div>
                            <a href="images/g1.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <div class="gallery">
                                        <div class="wthree_gallery_grid">
                                            <a href="{{ route('gallery-trekking') }}" class="lsb-preview" data-lsb-group="header">
                                                <div class="view second-effect">
                                                    <img class="img-responsive" src="{{asset('thumbnail/'.$galleryTrekking->image)}}">
                                                    <div class="mask">
                                                        <p>Trekking</p>
                                                    </div>
                                                </div>  
                                            </a>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>

                    <div class="col-sm-4  agileits_w3layouts_gallery_grid1 w3layouts_gallery_grid1 hover14" style="    margin-bottom: 10%;">
                        <div class="w3_agile_gallery_effect">
                            <div  style="margin-bottom: 4%">
                                {{-- <h4 class="tittle mb-xl-5 mb-4 text-center">
                                    <span class="text-uppercase">Gallery</span></h4>  --}}
                                    {{-- <h2 class="tittle mb-xl-5 mb-4 text-center" style="font-size: 225%; font-family: auto;" >Camping</h2> --}}
                            </div>
                            <a href="images/g1.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <div class="gallery">
                                        <div class="wthree_gallery_grid">
                                            <a href="{{ route('gallery-camping') }}" class="lsb-preview" data-lsb-group="header">
                                                <div class="view second-effect">
                                                    <img class="img-responsive" src="{{asset('thumbnail/'.$galleryCamping->image)}}">
                                                    <div class="mask">
                                                        <p>Camping</p>
                                                    </div>
                                                </div>  
                                            </a>
                                        </div>
                                    </div>
                                </figure>
                            </a>
                        </div>
                    </div>


                    
                </div>
            </div>
        </div>
    </div>
    <!-- //gallery -->

@endsection
