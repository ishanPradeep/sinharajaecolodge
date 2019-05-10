<?php

namespace App\Http\Controllers\Voyager;

use App\Subscribe;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerBreadController;
use App\Http\Controllers\Controller;
use Validator;
use Image;


class SubscribeController extends Controller
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
         $subscribe = Subscribe::orderBy('created_at', 'desc')->first();
        return view('admin/subscribe/create',[ 'subscribe' => $subscribe ,'success' => ""]);
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
            'title'=>'required',
            'image1' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
            
        ]); 

        $subscribe = Subscribe::find($request->ig);
        $subscribe->title=$request->title;
        $subscribe->description=$request->description;
        $image= $request->file();

        if (!empty($request->file()['image'])) {

            $file = $request->file('image');
            $new_name = rand() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('thumbnail'), $new_name);
            $subscribe->image = $new_name;

        }
        $subscribe->save();
        $subscribe = Subscribe::orderBy('created_at', 'desc')->first();
        return view('admin/subscribe/create',['subscribe'=>$subscribe, 'success' => "Successfully Created"]);
    
    
    }

}
