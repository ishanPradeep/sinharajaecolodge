<?php

namespace App\Http\Controllers\Voyager;

use App\CustomerSay;
use Illuminate\Http\Request;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerBreadController;
use App\Http\Controllers\Controller;
use Validator;

// import the Intervention Image Manager Class
use Image;

class CustomerSayController extends Controller
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
        $say = CustomerSay::find(1);
        return view('admin/customer-say-banner/create',['say'=>$say,
                    'success' => ""]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'description' => 'required'
        ]); 

        $say= CustomerSay::find(1);
        $say->title=$request->title;
        $say->description=$request->description;
        $say->save();
        $say = CustomerSay::find(1);
        return view('admin/customer-say-banner/create',['say'=>$say,
                    'success' => "Successfully Updated"]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CustomerSay  $customerSay
     * @return \Illuminate\Http\Response
     */
    public function show(CustomerSay $customerSay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CustomerSay  $customerSay
     * @return \Illuminate\Http\Response
     */
    public function edit(CustomerSay $customerSay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CustomerSay  $customerSay
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CustomerSay $customerSay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CustomerSay  $customerSay
     * @return \Illuminate\Http\Response
     */
    public function destroy(CustomerSay $customerSay)
    {
        //
    }
}
