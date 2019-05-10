<?php

namespace App\Http\Controllers;

use App\Newsletter;
use Illuminate\Http\Request;
use Mail;

class NewsletterController extends Controller
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
        //
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
            
            'name'=>'required',
            'email'=>'required|email|unique:newsletters',
        ]); 


        $newsletter= new Newsletter();
        $newsletter->name=$request->name;
        $newsletter->email=$request->email;
        
        
        $newsletter->save();

        $email = $request->get('email');

        try {

            Mail::send('emails.subscribe', ['email' => $email],
                function ($message) use ($email) {
                    $message->to($email)->subject("Thank you for Subscribing");
                    $message->cc('pavaroneecolodge@gmail.com')->subject("Thank you for Subscribing");
                });
            return redirect(route('about-us'))->with('success', 'Thank You! Successfully Sent.');
            
        } catch (\Exception $exception) {
            \Log::error($exception);
            return redirect(route('about-us'))->with('warning', 'Error! Please try again later.');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function show(Newsletter $newsletter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsletter $newsletter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newsletter $newsletter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Newsletter  $newsletter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsletter $newsletter)
    {
        //
    }
}
