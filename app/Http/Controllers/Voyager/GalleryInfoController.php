<?php

namespace App\Http\Controllers\Voyager;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerBreadController;
use App\Http\Controllers\Controller;
use Validator;
use App\GalleryInfo;


class GalleryInfoController extends Controller
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
        $info = GalleryInfo::find(1);
        return view('admin/galleryInfo/create',['info'=>$info,
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
            'description'=>'required',
            
        ]); 
        $info = GalleryInfo::find(1);
        $info->description =$request->description;
        
            
                
        $info->save();
        $info = GalleryInfo::find(1);

        return view('admin/galleryInfo/create',['info'=>$info,
                    'success' => "Successfully Updated"]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GalleryInfo  $galleryInfo
     * @return \Illuminate\Http\Response
     */
    public function show(GalleryInfo $galleryInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GalleryInfo  $galleryInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(GalleryInfo $galleryInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GalleryInfo  $galleryInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GalleryInfo $galleryInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GalleryInfo  $galleryInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(GalleryInfo $galleryInfo)
    {
        //
    }
}
