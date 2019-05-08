<?php

namespace App\Http\Controllers\Voyager;

use App\Slider;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerBreadController;
use App\Http\Controllers\Controller;
use Validator;
use Image;



class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $slider = Slider::find(1);
        // $slider = Slider::orderBy('created_at', 'desc')->first();
        return view('admin/slider/create',['slider'=>$slider,
                    'success' => ""]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'logo_image' => 'max:4060|image|mimes:jpeg,png,jpg,gif,svg',
            'back_image1' => 'max:4060|image|mimes:jpeg,png,jpg,gif,svg',
            'back_image2' => 'max:4060|image|mimes:jpeg,png,jpg,gif,svg',
            'back_image3' => 'max:4060|image|mimes:jpeg,png,jpg,gif,svg',
            'back_image_one'=> 'required',
            'back_image_two'=> 'required',
            'back_image_three'=> 'required',
            'logo_image1'=> 'required',
            'banner_header'=>'required|max:20',
            'banner_info_title'=>'required|max:50',
            'banner_info1'=>'required|max:40',
            'link_for_facebook'=>'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            'link_for_booking'=>'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            'link_for_tripadvisor'=>'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            'link_for_agoda'=>'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            'link_for_book_now' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            'contact_number1' => 'required|nullable|regex:/^([0-9\s\-\+\(\)]*)$/',
            'contact_number2'=>'required|nullable|regex:/^([0-9\s\-\+\(\)]*)$/',
            'email' => 'required|email|max:255',
            'address'=>'required',
        ]); 
        $slider = Slider::find(1);
        $slider->banner_header =$request->banner_header;
        $slider->banner_info_title =$request->banner_info_title;
        $slider->banner_info1 =$request->banner_info1;
        $slider->link_for_facebook =$request->link_for_facebook;
        $slider->link_for_booking =$request->link_for_booking;
        $slider->link_for_tripadvisor =$request->link_for_tripadvisor;
        $slider->link_for_agoda =$request->link_for_agoda;
        $slider->link_for_book_now =$request->link_for_book_now;
        $slider->contact_number1 =$request->contact_number1;
        $slider->contact_number2 =$request->contact_number2;
        $slider->email =$request->email;
        $slider->address =$request->address;

            
                if (!empty($request->file()['back_image1'])) {
                    $thumbnailImage = Image::make($request->file()['back_image1']);
                    $thumbnailPath = public_path().'/slider/';
                    $originalPath = public_path().'/photos/';
                    
                    $thumbnailImage->save($originalPath.time().$request->file()['back_image1']->getClientOriginalName());
                    // $thumbnailImage->resize(300,350);
                    $thumbnailImage->save($thumbnailPath.time().$request->file()['back_image1']->getClientOriginalName());

                    $slider->back_image1=time().$request->file()['back_image1']->getClientOriginalName();
                }
                if (!empty($request->file()['back_image2'])) {

                    $thumbnailImage = Image::make($request->file()['back_image2']);
                    $thumbnailPath = public_path().'/slider/';
                    $originalPath = public_path().'/photos/';
                    
                    $thumbnailImage->save($originalPath.time().$request->file()['back_image2']->getClientOriginalName());
                    // $thumbnailImage->resize(300,350);
                    $thumbnailImage->save($thumbnailPath.time().$request->file()['back_image2']->getClientOriginalName());

                    $slider->back_image2=time().$request->file()['back_image2']->getClientOriginalName();
                }

                if (!empty($request->file()['back_image3'])) {

                    $thumbnailImage = Image::make($request->file()['back_image3']);
                    $thumbnailPath = public_path().'/slider/';
                    $originalPath = public_path().'/photos/';
                    
                    $thumbnailImage->save($originalPath.time().$request->file()['back_image3']->getClientOriginalName());
                    // $thumbnailImage->resize(300,350);
                    $thumbnailImage->save($thumbnailPath.time().$request->file()['back_image3']->getClientOriginalName());

                    $slider->back_image3=time().$request->file()['back_image3']->getClientOriginalName();
                }
                if (!empty($request->file()['logo_image'])) {
                    $thumbnailImage = Image::make($request->file()['logo_image']);
                    $thumbnailPath = public_path().'/slider/';
                    $originalPath = public_path().'/photos/';
                    
                    $thumbnailImage->save($originalPath.time().$request->file()['logo_image']->getClientOriginalName());
                    $thumbnailImage->resize(300,350);
                    $thumbnailImage->save($thumbnailPath.time().$request->file()['logo_image']->getClientOriginalName());

                    $slider->logo_image=time().$request->file()['logo_image']->getClientOriginalName();
                }
           
        $slider->save();
        $slider = Slider::find(1);

        return view('admin/slider/create',['slider'=>$slider,
                    'success' => "Successfully Updated"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
