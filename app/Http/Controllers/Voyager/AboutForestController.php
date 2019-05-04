<?php

namespace App\Http\Controllers\Voyager;

use App\AboutForest;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerBreadController;
use App\Http\Controllers\Controller;
use Validator;

// import the Intervention Image Manager Class
use Image;

class AboutForestController extends Controller
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
        $forest=AboutForest::find(1);
        return view('aboutForest/create',['forest'=>$forest]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutForest  $aboutForest
     * @return \Illuminate\Http\Response
     */
    public function show(AboutForest $aboutForest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutForest  $aboutForest
     * @return \Illuminate\Http\Response
     */
    public function edit(AboutForest $aboutForest)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutForest  $aboutForest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutForest $aboutForest)
    {
        $this->validate($request,[
            
            'description' => 'required'
        ]); 


        
        $forest=AboutForest::find(1);
        $forest->description=$request->description;


        $forest->save();

        return redirect(route('voyager.about-forests.index',['forest'=>$forest]))
            ->with([
                'message' => "Successfully Created",
                'alert-type' => 'success',
            ]);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutForest  $aboutForest
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutForest $aboutForest)
    {
        //
    }
}
