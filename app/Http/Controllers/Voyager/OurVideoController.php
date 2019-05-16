<?php

namespace App\Http\Controllers\Voyager;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerBreadController;
use App\Http\Controllers\Controller;
use Validator;
use Image;
use App\OurVideo;
use Illuminate\Http\Request;


class OurVideoController extends Controller
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
        $ourVideo=OurVideo::find(1);
        return view('admin/ourVideo/create',['ourVideo'=>$ourVideo,
                    'success' => ""]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Display the specified resource.
     *
     * @param  \App\OurVideo  $ourVideo
     * @return \Illuminate\Http\Response
     */
    public function show(OurVideo $ourVideo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OurVideo  $ourVideo
     * @return \Illuminate\Http\Response
     */
    public function edit(OurVideo $ourVideo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OurVideo  $ourVideo
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request){
        $this->validate($request,[
            'video1' => 'mimes:mp4,mov,ogg,qt | max:20000',
            'video2'=>'mimes:mp4,mov,ogg,qt | max:20000',
            'video3'=>'mimes:mp4,mov,ogg,qt | max:20000',
            'video_one'=> 'required',
            'video_two'=> 'required',
            'video_three'=> 'required',
            'title'=>'required',
            'description' => 'required'
        ]); 

        $ourVideo= OurVideo::find(1);
        $ourVideo->title=$request->title;
        $ourVideo->description=$request->description;

         if (!empty($request->file()['video1'])) {

            $file = $request->file('video1');
            $new_name = rand() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('thumbnail'), $new_name);
            $ourVideo->video1 = $new_name;

        }

        if (!empty($request->file()['video2'])) {

            $file = $request->file('video2');
            $new_name = rand() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('thumbnail'), $new_name);
            $ourVideo->video2 = $new_name;

        }

        if (!empty($request->file()['video3'])) {

            $file = $request->file('video3');
            $new_name = rand() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('thumbnail'), $new_name);
            $ourVideo->video3 = $new_name;

        }


        $ourVideo->save();
        return view('admin/ourVideo/create',['ourVideo'=>$ourVideo,'success' => "Successfully Updated"]);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OurVideo  $ourVideo
     * @return \Illuminate\Http\Response
     */
    public function destroy(OurVideo $ourVideo)
    {
        //
    }
}
