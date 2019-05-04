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
        return view('gallery/gallery',['slider'=>$slider,'adventure'=>$adventure , 'homePageEvent'=>$homePageEvent , 'galleryInfo'=>$galleryInfo , 'customerSay'=>$customerSay ,'customers'=>$customers,'us'=>$us]);

        
        return view('gallery/gallery');
    }

    public function event_activities(){
        $us = About::orderBy('created_at', 'desc')->first();
        $eventActivity = GalleryEventActivity::get();
        $slider = Slider::orderBy('created_at', 'desc')->first();
        return view('gallery/event_activities',['slider'=>$slider, 'eventActivity'=>$eventActivity,'us'=>$us]);
    }

    public function waterfalls(){
        $us = About::orderBy('created_at', 'desc')->first();
        $waterfalls = GalleryWaterfall::get();
        $slider = Slider::orderBy('created_at', 'desc')->first();        
        return view('gallery/waterfalls',['slider'=>$slider, 'waterfalls'=>$waterfalls,'us'=>$us]);
    }

    public function foods(){
        $us = About::orderBy('created_at', 'desc')->first();
        $foods = GalleryFood::get();
        $slider = Slider::orderBy('created_at', 'desc')->first();        
        return view('gallery/foods',['slider'=>$slider, 'foods'=>$foods,'us'=>$us]);
    }

    public function accommodation(){
        $us = About::orderBy('created_at', 'desc')->first();
        $accommodation = GalleryAccommodation::get();
        $slider = Slider::orderBy('created_at', 'desc')->first();        
        return view('gallery/accommodation',['slider'=>$slider, 'accommodations'=>$accommodation,'us'=>$us]);
    }

    public function trekking(){
        $us = About::orderBy('created_at', 'desc')->first();
        $trekkings = GalleryTrekking::get();
        $slider = Slider::orderBy('created_at', 'desc')->first();        
        return view('gallery/trekking',['slider'=>$slider, 'trekkings'=>$trekkings,'us'=>$us]);
    }

    public function camping(){
        $us = About::orderBy('created_at', 'desc')->first();
        $campings = GalleryCamping::get();
        $slider = Slider::orderBy('created_at', 'desc')->first();        
        return view('gallery/camping',['slider'=>$slider, 'campings'=>$campings,'us'=>$us]);
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
