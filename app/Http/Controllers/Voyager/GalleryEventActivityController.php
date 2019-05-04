<?php

namespace App\Http\Controllers\Voyager;

use App\GalleryEventActivity;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerBreadController;
use App\Http\Controllers\Controller;
use Validator;
use Image;

class GalleryEventActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = GalleryEventActivity::get();
        return view('admin/gallery/eventActivity/index',[ 'events' => $events ,'success' => ""]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/gallery/eventActivity/create',['success' => ""]);

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
            'description'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            
        ]); 

        $event= new GalleryEventActivity();
        $event->description=$request->description;
    
        $image= $request->file();
        foreach ($image as $key => $value) {
            $thumbnailImage = Image::make($value);
            $thumbnailPath = public_path().'/thumbnail/';
            $originalPath = public_path().'/event/';
            
            $thumbnailImage->save($originalPath.time().$value->getClientOriginalName());
            $thumbnailImage->resize(1150,950);
            $thumbnailImage->save($thumbnailPath.time().$value->getClientOriginalName()); 
                    
            $event->image=time().$value->getClientOriginalName();
        }
        $event->save();
        return view('admin/gallery/eventActivity/create',['success' => "Successfully Created"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GalleryEventActivity  $galleryEventActivity
     * @return \Illuminate\Http\Response
     */
    public function show(GalleryEventActivity $galleryEventActivity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GalleryEventActivity  $galleryEventActivity
     * @return \Illuminate\Http\Response
     */
    public function edit(GalleryEventActivity $galleryEventActivity , $id)
    {
        $event = GalleryEventActivity::find($id);
        return view('admin/gallery/eventActivity/edit',[ 'event' => $event ,'success' => ""]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GalleryEventActivity  $galleryEventActivity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  String $id)
    {
        $this->validate($request,[
            'description'=>'required',
            'event_image'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            
        ]); 

        $event= GalleryEventActivity::find($id);
        $event->description=$request->description;
    
        $image= $request->file();
        foreach ($image as $key => $value) {
            $thumbnailImage = Image::make($value);
            $thumbnailPath = public_path().'/thumbnail/';
            $originalPath = public_path().'/event/';
            
            $thumbnailImage->save($originalPath.time().$value->getClientOriginalName());
            $thumbnailImage->resize(1150,950);
            $thumbnailImage->save($thumbnailPath.time().$value->getClientOriginalName()); 
                    
            $event->image=time().$value->getClientOriginalName();
        }
        $event->save();
        return view('admin/gallery/eventActivity/edit',['event'=>$event,'success' => "Successfully Updated"]);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GalleryEventActivity  $galleryEventActivity
     * @return \Illuminate\Http\Response
     */
    public function destroy(GalleryEventActivity $galleryEventActivity , String $id)
    {

        $event = GalleryEventActivity::find($id);
        $event->delete();
        $events = GalleryEventActivity::get();
        return view('admin/gallery/eventActivity/index',[ 'events' => $events ,'success' => "Successfully Deleted"]);

    }
}
