<?php

namespace App\Http\Controllers;

use App\Home;
use Illuminate\Http\Request;
use App\Slider;
use App\Adventure;
use App\HomePageEvent;
use App\GalleryInfo;
use App\CustomerSay;
use App\Customer;
use App\About;
use App\GalleryTrekking;
use App\GalleryAccommodation;
use App\GalleryCamping;
use App\GalleryEventActivity;
use App\GalleryFood;
use App\GalleryWaterfall;
use App\OurVideo;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourVideo = OurVideo::orderBy('created_at', 'desc')->first();
        $customers=Customer::get();
        $customerSay=CustomerSay::find(1);
        $galleryInfo =GalleryInfo::orderBy('created_at', 'desc')->first();
        $homePageEvent= HomePageEvent::orderBy('created_at', 'desc')->first();
        $adventure = Adventure::orderBy('created_at', 'desc')->first();
        $us = About::orderBy('created_at', 'desc')->first();
        $slider = Slider::orderBy('created_at', 'desc')->first();

        
        $trekking = GalleryTrekking::get();
        foreach ($trekking as $key => $value) {
            $gallerySlider[]=$value->image;
        }
        $accommodation = GalleryAccommodation::get();
        foreach ($accommodation as $key => $value) {
            $gallerySlider[]=$value->image;
        }
        $camping = GalleryCamping::get();
        foreach ($camping as $key => $value) {
            $gallerySlider[]=$value->image;
        }
        $eventActivity = GalleryEventActivity::get();
        foreach ($eventActivity as $key => $value) {
            $gallerySlider[]=$value->image;
        }
        $food = GalleryFood::get();
        foreach ($food as $key => $value) {
            $gallerySlider[]=$value->image;
        }
        $waterfall = GalleryWaterfall::get();
        foreach ($waterfall as $key => $value) {
            $gallerySlider[]=$value->image;
        }

        $meta_title= "pavarone eco lodge";
        $meta_description= "Pavarone Eco Lodge Sinharajaprovides comfortable accommodation in the outskirts of the Sinharaja rainforest.";
        $meta_keywords= "pavarone,gallery-eco-lodge.html,accomodation,accomodation,gallery-eco-lodge,restaurants,sinharaja,sinharaja eco lodge";

        return view('home',['ourVideo'=>$ourVideo,'slider'=>$slider,'adventure'=>$adventure , 'homePageEvent'=>$homePageEvent , 'galleryInfo'=>$galleryInfo , 'customerSay'=>$customerSay ,'customers'=>$customers ,'us'=>$us , 'gallerySlider'=>$gallerySlider, 'meta_title'=>$meta_title , 'meta_description'=>$meta_description , 'meta_keywords'=>$meta_keywords  ]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
