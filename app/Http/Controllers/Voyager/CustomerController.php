<?php

namespace App\Http\Controllers\Voyager;

use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerBreadController;
use App\Http\Controllers\Controller;
use Validator;
use App\Customer;

// import the Intervention Image Manager Class
use Image;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::get();
        return view('admin/comments/index',[ 'customers' => $customers ,'success' => ""]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'country' => 'required',
            'says' => 'required|max:450',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]); 

        $customer= new Customer();
        $customer->name=$request->name;
        $customer->says=$request->says;
        $customer->country=$request->country;
        
     
        $image= $request->file();
        foreach ($image as $key => $value) {
            $thumbnailImage = Image::make($value);
            $thumbnailPath = public_path().'/thumbnail/';
            $originalPath = public_path().'/photos/';
            
            $thumbnailImage->save($originalPath.time().$value->getClientOriginalName());
            $thumbnailImage->resize(100,100);
            $thumbnailImage->save($thumbnailPath.time().$value->getClientOriginalName()); 
                    
            $customer->image=time().$value->getClientOriginalName();
        }
        $customer->save();
        return view('admin/comments/create',['success' => "Successfully Created"]);

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer ,$id)
    {
        $customer = Customer::find($id);
        return view('admin/comments/edit',[ 'customer' => $customer ,'success' => ""]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , String $id)
    {
        $this->validate($request,[
            'name'=>'required',
            'country' => 'required',
            'says' => 'required|max:450',
            'user_image'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
        ]); 
        $customer= Customer::find($id);
        $customer->name=$request->name;
        $customer->says=$request->says;
        $customer->country=$request->country;
        
     
        $image= $request->file();
        foreach ($image as $key => $value) {
            $thumbnailImage = Image::make($value);
            $thumbnailPath = public_path().'/thumbnail/';
            $originalPath = public_path().'/photos/';
            
            $thumbnailImage->save($originalPath.time().$value->getClientOriginalName());
            $thumbnailImage->resize(100,100);
            $thumbnailImage->save($thumbnailPath.time().$value->getClientOriginalName()); 
                    
            $customer->image=time().$value->getClientOriginalName();
        }
        $customer->save();
        return view('admin/comments/edit',[ 'customer' => $customer ,'success' => "Successfully Updated"]);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer , String $id)
    {

        $comment = Customer::find($id);
        $comment->delete();
        $customers = Customer::get();
        return view('admin/comments/index',[ 'customers' => $customers ,'success' => "Successfully Deleted"]);

    }
}
