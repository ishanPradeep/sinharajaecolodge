<?php

namespace App\Http\Controllers\Voyager;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerBreadController;
use App\Http\Controllers\Controller;
use Validator;
use Image;
use App\GalleryTrekking;
use Illuminate\Http\Request;
class GalleryTrekkingController extends Controller
{
         /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $events = GalleryTrekking::get();
        return view('admin/gallery/trekking/index',[ 'events' => $events ,'success' => ""]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/gallery/trekking/create',['success' => ""]);
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

        $waterfall= new GalleryTrekking();
        $waterfall->description=$request->description;
    
        $image= $request->file();
        foreach ($image as $key => $value) {
            $thumbnailImage = Image::make($value);
            $thumbnailPath = public_path().'/thumbnail/';
            $originalPath = public_path().'/trekkings/';
            
            $thumbnailImage->save($originalPath.time().$value->getClientOriginalName());
            $thumbnailImage->resize(1150,950);
            $thumbnailImage->save($thumbnailPath.time().$value->getClientOriginalName()); 
                    
            $waterfall->image=time().$value->getClientOriginalName();
        }
        $waterfall->save();
        return view('admin/gallery/trekking/create',['success' => "Successfully Created"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GalleryWaterfalls  $galleryWaterfalls
     * @return \Illuminate\Http\Response
     */
    public function show(GalleryTrekking $galleryTrekking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GalleryTrekkings  $galleryWaterfalls
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = GalleryTrekking::find($id);
        return view('admin/gallery/trekking/edit',[ 'event' => $event ,'success' => ""]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GalleryWaterfalls  $galleryWaterfalls
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, String $id)
    {
        $this->validate($request,[
            'description'=>'required',
            'event_image'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            
        ]); 

        $event= GalleryTrekking::find($id);
        $event->description=$request->description;
    
        $image= $request->file();
        foreach ($image as $key => $value) {
            $thumbnailImage = Image::make($value);
            $thumbnailPath = public_path().'/thumbnail/';
            $originalPath = public_path().'/trekkings/';
            
            $thumbnailImage->save($originalPath.time().$value->getClientOriginalName());
            $thumbnailImage->resize(1150,950);
            $thumbnailImage->save($thumbnailPath.time().$value->getClientOriginalName()); 
                    
            $event->image=time().$value->getClientOriginalName();
        }
        $event->save();
        return view('admin/gallery/trekking/edit',['event'=>$event,'success' => "Successfully Updated"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GalleryWaterfalls  $galleryWaterfalls
     * @return \Illuminate\Http\Response
     */
    public function destroy(String $id)
    {

        $event = GalleryTrekking::find($id);
        $event->delete();
        $events = GalleryTrekking::get();
        return view('admin/gallery/trekking/index',[ 'events' => $events ,'success' => "Successfully Deleted"]);

    }
}
