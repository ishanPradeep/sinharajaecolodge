<?php

namespace App\Http\Controllers\Voyager;

use App\HomePageEvent;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerBreadController;
use App\Http\Controllers\Controller;
use Validator;
use Image;




class HomePageEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = HomePageEvent::find(1);
        return view('admin/home-page-events/create',['event'=>$event,
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
            'image' => 'max:5060|image|mimes:jpeg,png,jpg,gif,svg',
            'image1'=> 'required',
            'title'=>'required',
            'description'=>'required',
            
        ]); 
        $event = HomePageEvent::find(1);
        $event->title =$request->title;
        $event->description =$request->description;
        
            
        if (!empty($request->file()['image'])) {
            $file = $request->file('image');
            $new_name = rand() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('thumbnail'), $new_name);
            $event->image = $new_name;
        }
                
                 
        $event->save();
        $event = HomePageEvent::find(1);

        return view('admin/home-page-events/create',['event'=>$event,
                    'success' => "Successfully Updated"]);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\HomePageEvent  $homePageEvent
     * @return \Illuminate\Http\Response
     */
    public function show(HomePageEvent $homePageEvent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\HomePageEvent  $homePageEvent
     * @return \Illuminate\Http\Response
     */
    public function edit(HomePageEvent $homePageEvent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\HomePageEvent  $homePageEvent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomePageEvent $homePageEvent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\HomePageEvent  $homePageEvent
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomePageEvent $homePageEvent)
    {
        //
    }
}
