<?php
namespace App\Http\Controllers\Voyager;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerBreadController;
use App\Http\Controllers\Controller;
use Validator;
use Image;
use App\Package;
use Illuminate\Http\Request;




class PackageController extends Controller
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

        $package = Package::find(1);
        return view('admin/package/create',['package'=>$package,
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
        'b_b_single' => 'required',
        'b_b_dbl'=>'required',
        'b_b_tpl'=>'required',
        'b_b_description'=> 'required',
        'h_b_single'=> 'required',
        'h_b_tpl'=> 'required',
        'h_b_dbl'=>'required',
        'h_b_description' => 'required',
        'f_b_single' => 'required',
        'f_b_dbl' => 'required',
        'f_b_tpl' => 'required',
        'f_b_description' => 'required',
        'packages_night_stay' => 'required',
        'day_out_packages' => 'required',
        'swimming_areas' => 'required',
        'room_facilities' => 'required'
    ]); 


        $package= Package::find(1);
        $package->b_b_single =$request->b_b_single;
        $package->b_b_dbl=$request->b_b_dbl;
        $package->b_b_tpl =$request->b_b_tpl;
        $package->b_b_description =$request->b_b_description;
        $package->h_b_single =$request->h_b_single;
        $package->h_b_dbl=$request->h_b_dbl;
        $package->h_b_tpl=$request->h_b_tpl;
        $package->h_b_description =$request->h_b_description;
        $package->f_b_single =$request->f_b_single;
        $package->f_b_tpl =$request->f_b_tpl;
        $package->f_b_dbl =$request->f_b_dbl;
        $package->f_b_description =$request->f_b_description;
        $package->packages_night_stay=$request->packages_night_stay;
        $package->day_out_packages =$request->day_out_packages;
        $package->swimming_areas =$request->swimming_areas;
        $package->room_facilities =$request->room_facilities;

        $package->save();
        $package = Package::find(1);
        return view('admin/package/create',['package'=>$package,
                    'success' => "Successfully Updated"]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        //
    }
}
