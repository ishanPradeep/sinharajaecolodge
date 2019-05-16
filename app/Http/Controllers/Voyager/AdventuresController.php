<?php

namespace App\Http\Controllers\Voyager;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerBreadController;
use App\Http\Controllers\Controller;
use Validator;
use App\Adventure;

// import the Intervention Image Manager Class
use Image;

class AdventuresController extends Controller
{
    public function index(Request $request)
    {
		
	}
    
    public function create(Request $request)
    {
        $adventures = Adventure::find(1);
    	return view('admin/adventures/create',['adventures'=>$adventures,
                    'success' => ""]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_one'=> 'required',
            'image_two'=> 'required',
            'image_three'=> 'required',
            'title'=>'required',
            'description' => 'required'
        ]); 

        $adventure= Adventure::find(1);
        $adventure->title=$request->title;
        $adventure->description=$request->description;

         if (!empty($request->file()['image1'])) {
                    $thumbnailImage = Image::make($request->file()['image1']);
                    $thumbnailPath = public_path().'/thumbnail/';
                    $originalPath = public_path().'/photos/';
                    
                    $thumbnailImage->save($originalPath.time().$request->file()['image1']->getClientOriginalName());
                    $thumbnailImage->resize(300,350);
                    $thumbnailImage->save($thumbnailPath.time().$request->file()['image1']->getClientOriginalName());

                    $adventure->image1=time().$request->file()['image1']->getClientOriginalName();
                }
                if (!empty($request->file()['image2'])) {

                    $thumbnailImage = Image::make($request->file()['image2']);
                    $thumbnailPath = public_path().'/thumbnail/';
                    $originalPath = public_path().'/photos/';
                    
                    $thumbnailImage->save($originalPath.time().$request->file()['image2']->getClientOriginalName());
                    $thumbnailImage->resize(300,350);
                    $thumbnailImage->save($thumbnailPath.time().$request->file()['image2']->getClientOriginalName());

                    $adventure->image2=time().$request->file()['image2']->getClientOriginalName();
                }

                if (!empty($request->file()['image3'])) {

                    $thumbnailImage = Image::make($request->file()['image3']);
                    $thumbnailPath = public_path().'/thumbnail/';
                    $originalPath = public_path().'/photos/';
                    
                    $thumbnailImage->save($originalPath.time().$request->file()['image3']->getClientOriginalName());
                    $thumbnailImage->resize(300,350);
                    $thumbnailImage->save($thumbnailPath.time().$request->file()['image3']->getClientOriginalName());

                    $adventure->image3=time().$request->file()['image3']->getClientOriginalName();
                }


        $adventure->save();
        $adventures = Adventure::find(1);
        return view('admin/adventures/create',['adventures'=>$adventures,
                    'success' => "Successfully Updated"]);
        
    }
}
