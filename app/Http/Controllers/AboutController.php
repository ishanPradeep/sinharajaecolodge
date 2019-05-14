<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use App\Slider;
use App\Subscribe;
use App\OurAgent;
use App\AboutForest;
use App\Contact;
class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

    }

    public function getAboutUs(){
        $slider = Slider::orderBy('created_at', 'desc')->first();
        $subscribe =Subscribe::orderBy('created_at', 'desc')->first();
        $us = About::orderBy('created_at', 'desc')->first();
        $agents = OurAgent::limit(4)->orderBy('updated_at', 'desc')->get();
        $contact=Contact::orderBy('created_at', 'desc')->first();

        return view('about/about-us',['slider'=>$slider ,'us' =>$us , 'contact'=>$contact,'subscribe'=>$subscribe , 'agents'=>$agents]);
    }

    public function getAboutSinharaja(){
        $us = About::orderBy('created_at', 'desc')->first();
        $slider = Slider::orderBy('created_at', 'desc')->first();
        $forest = AboutForest::find(1);
        return view('about/about-sinharaja',['slider'=>$slider, 'forest'=>$forest,'us' =>$us]);
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
