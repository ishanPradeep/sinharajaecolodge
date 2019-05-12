<?php

namespace App\Http\Controllers;

use App\Gallery;
use App\Home;
use Illuminate\Http\Request;
use App\Slider;
use App\Adventure;
use App\HomePageEvent;
use App\GalleryInfo;
use App\CustomerSay;
use App\Customer;
use App\GalleryEventActivity;
use App\GalleryWaterfall;
use App\GalleryFood;
use App\GalleryAccommodation;
use App\GalleryTrekking;
use App\GalleryCamping;
use App\About;
use App\AboutAccommodation;
use App\AboutCamping;
use App\AboutEventActivity;
use App\AboutFood;
use App\AboutForest;
use App\AboutTrekking;
use App\AboutWaterfall;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $us = About::orderBy('created_at', 'desc')->first();
        $customers=Customer::get();
        $customerSay=CustomerSay::orderBy('created_at', 'desc')->first();
        $galleryInfo =GalleryInfo::orderBy('created_at', 'desc')->first();
        $homePageEvent= HomePageEvent::orderBy('created_at', 'desc')->first();
        $adventure = Adventure::orderBy('created_at', 'desc')->first();
        $slider = Slider::orderBy('created_at', 'desc')->first();

        $eventActivity = GalleryEventActivity::orderBy('created_at', 'desc')->first();
        $galleryAccommodation=GalleryAccommodation::orderBy('created_at', 'desc')->first();
        $galleryCamping=GalleryCamping::orderBy('created_at', 'desc')->first();
        $galleryFood=GalleryFood::orderBy('created_at', 'desc')->first();
        $galleryTrekking=GalleryTrekking::orderBy('created_at', 'desc')->first();
        $galleryWaterfall=GalleryWaterfall::orderBy('created_at', 'desc')->first();



        return view('gallery/gallery',['eventActivity' =>$eventActivity ,'galleryWaterfall' =>$galleryWaterfall ,'galleryAccommodation' =>$galleryAccommodation ,'galleryCamping' =>$galleryCamping ,'galleryFood' =>$galleryFood ,'galleryTrekking' =>$galleryTrekking ,'slider'=>$slider,'adventure'=>$adventure , 'homePageEvent'=>$homePageEvent , 'galleryInfo'=>$galleryInfo , 'customerSay'=>$customerSay ,'customers'=>$customers,'us'=>$us]);

        
        return view('gallery/gallery');
    }

    public function event_activities(){
        $aboutEventActivity=AboutEventActivity::orderBy('created_at', 'desc')->first();
        $us = About::orderBy('created_at', 'desc')->first();
        $eventActivity = GalleryEventActivity::get();
        $slider = Slider::orderBy('created_at', 'desc')->first();
        return view('gallery/event_activities',['slider'=>$slider, 'aboutEventActivity'=>$aboutEventActivity, 'eventActivity'=>$eventActivity,'us'=>$us]);
    }

    public function waterfalls(){
        $aboutWaterfall=AboutWaterfall::orderBy('created_at', 'desc')->first();

        $us = About::orderBy('created_at', 'desc')->first();
        $waterfalls = GalleryWaterfall::get();
        $slider = Slider::orderBy('created_at', 'desc')->first();        
        return view('gallery/waterfalls',['slider'=>$slider,'aboutWaterfall'=>$aboutWaterfall ,'waterfalls'=>$waterfalls,'us'=>$us]);
    }

    public function foods(){
        $aboutFood=AboutFood::orderBy('created_at', 'desc')->first();

        $us = About::orderBy('created_at', 'desc')->first();
        $foods = GalleryFood::get();
        $slider = Slider::orderBy('created_at', 'desc')->first();        
        return view('gallery/foods',['slider'=>$slider, 'aboutFood'=>$aboutFood ,'foods'=>$foods,'us'=>$us]);
    }


    public function accommodation(){
        $aboutAccommodation= AboutAccommodation::orderBy('created_at', 'desc')->first();

        $us = About::orderBy('created_at', 'desc')->first();
        $accommodation = GalleryAccommodation::get();
        $slider = Slider::orderBy('created_at', 'desc')->first();        
        return view('gallery/accommodation',['slider'=>$slider, 'aboutAccommodation'=>$aboutAccommodation, 'accommodations'=>$accommodation,'us'=>$us]);
    }

    public function trekking(){

        $aboutTrekking=AboutTrekking::orderBy('created_at', 'desc')->first();
        $us = About::orderBy('created_at', 'desc')->first();
        $trekkings = GalleryTrekking::get();
        $slider = Slider::orderBy('created_at', 'desc')->first();        
        return view('gallery/trekking',['slider'=>$slider,'aboutTrekking'=>$aboutTrekking, 'trekkings'=>$trekkings,'us'=>$us]);
    }

    public function camping(){
        $aboutCamping=AboutCamping::orderBy('created_at', 'desc')->first();
        $us = About::orderBy('created_at', 'desc')->first();
        $campings = GalleryCamping::get();
        $slider = Slider::orderBy('created_at', 'desc')->first();        
        return view('gallery/camping',['slider'=>$slider, 'aboutCamping'=>$aboutCamping, 'campings'=>$campings,'us'=>$us]);
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
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
