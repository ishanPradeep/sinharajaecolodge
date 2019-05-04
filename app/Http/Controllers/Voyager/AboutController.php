<?php

namespace App\Http\Controllers\Voyager;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerBreadController;
use App\Http\Controllers\Controller;
use Validator;
use App\AboutForest;
use App\About;

// import the Intervention Image Manager Class
use Image;

class AboutController extends Controller
{
   public function index(Request $request)
    {
        
    }
    
    public function create(Request $request)
    {
        $about = About::find(1);
        return view('admin/about/create',['about'=>$about,
                    'success' => ""]);
    }

    public function store(Request $request){
        $this->validate($request,[
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image1'=> 'required',
            'title'=>'required',
            'description' => 'required'
        ]); 

        $about= About::find(1);
        $about->title=$request->title;
        $about->description=$request->description;

         if (!empty($request->file()['image'])) {
            $thumbnailImage = Image::make($request->file()['image']);
            $thumbnailPath = public_path().'/thumbnail/';
            $originalPath = public_path().'/about/';
            
            $thumbnailImage->save($originalPath.time().$request->file()['image']->getClientOriginalName());
            $thumbnailImage->resize(500,350);
            $thumbnailImage->save($thumbnailPath.time().$request->file()['image']->getClientOriginalName());

            $about->image=time().$request->file()['image']->getClientOriginalName();
        }
                

        $about->save();
        $about = About::find(1);
        return view('admin/about/create',['about'=>$about,
                    'success' => "Successfully Updated"]);
        
    }
}
