<?php

namespace App\Http\Controllers\Voyager;

use App\OurAgent;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerBreadController;
use App\Http\Controllers\Controller;
use Validator;
use Image;

class OurAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = OurAgent::get();
        return view('admin/agent/index',[ 'agents' => $agents ,'success' => ""]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/agent/create',['success' => ""]);


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
            'fb' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            'twitter' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            'g_plus' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            'name'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            
        ]); 

        $agent= new OurAgent();
        $agent->name=$request->name;
        $agent->fb=$request->fb;
        $agent->twitter=$request->twitter;
        $agent->g_plus=$request->g_plus;
    
        $image= $request->file();
        foreach ($image as $key => $value) {
            $thumbnailImage = Image::make($value);
            $thumbnailPath = public_path().'/thumbnail/';
            $originalPath = public_path().'/agent/';
            
            $thumbnailImage->save($originalPath.time().$value->getClientOriginalName());
            $thumbnailImage->resize(750,850);
            $thumbnailImage->save($thumbnailPath.time().$value->getClientOriginalName()); 
                    
            $agent->image=time().$value->getClientOriginalName();
        }
        $agent->save();
        return view('admin/agent/create',[ 'success' => "Successfully Created"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GalleryEventActivity  $agent
     * @return \Illuminate\Http\Response
     */
    public function show(OurAgent $agent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OurAgent  $agent
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agent = OurAgent::find($id);
        return view('admin/agent/edit',[ 'agent' => $agent ,'success' => ""]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OurAgent  $agent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $this->validate($request,[
            'fb' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            'twitter' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            'g_plus' => 'required|regex:/^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?$/',
            'name'=>'required',

            'image' => 'required_without:hidden_image|image|mimes:jpeg,png,jpg,gif,svg',
            'hidden_image' => 'required_without:image',
            
        ]); 

        $agent= OurAgent::find($id);
        $agent->name=$request->name;
        $agent->fb=$request->fb;
        $agent->twitter=$request->twitter;
        $agent->g_plus=$request->g_plus;
        if (!empty($request->file())) {
            $image= $request->file();
            foreach ($image as $key => $value) {
                $thumbnailImage = Image::make($value);
                $thumbnailPath = public_path().'/thumbnail/';
                $originalPath = public_path().'/agent/';
                
                $thumbnailImage->save($originalPath.time().$value->getClientOriginalName());
                $thumbnailImage->resize(750,850);
                $thumbnailImage->save($thumbnailPath.time().$value->getClientOriginalName()); 
                        
                $agent->image=time().$value->getClientOriginalName();
            }
        }else{
            $agent->image=$request->hidden_image;
        }
        $agent->save();
        return view('admin/agent/edit',[ 'agent'=>$agent, 'success' => "Successfully Updated"]);

      

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OurAgent  $galleryEventActivity
     * @return \Illuminate\Http\Response
     */
    public function destroy(String $id)
    {

        $agent = OurAgent::find($id);
        $agent->delete();
        $agents = OurAgent::get();
        return view('admin/agent/index',[ 'agents' => $agents ,'success' => "Successfully Deleted"]);
    }
}
