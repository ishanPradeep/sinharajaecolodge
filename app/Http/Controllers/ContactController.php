<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Mail;
use App\Slider;
use App\About;
use App\Package;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        

        $slider = Slider::orderBy('created_at', 'desc')->first();
        $package =Package::orderBy('created_at', 'desc')->first();
        // $contact=Contact::orderBy('created_at', 'desc')->first();
        $us = About::orderBy('created_at', 'desc')->first();
        return view('package/show',['slider'=>$slider, 'package' => $package, 'us' =>$us ]);
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

    public function sendEmail(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'tel' => 'numeric',
            'email' => 'required|email',
            'subject' => 'required|max:100',
            'message' => 'required|max:5000',
        ]);

        $name = $request->get('name');
        $phone = $request->get('tel');
        $email = $request->get('email');
        $subject = $request->get('subject');
        $body = $request->get('message');



        try{
            Mail::send('emails.contact', ['name' => $name, 'phone' => $phone, 'email' => $email, 'body' => $body],
                function($message) use ($subject)
                {
                    $message->to('pavaroneecolodge@gmail.com')->subject($subject);
                });

            return redirect(url('/contact'))->with('success', 'Thank You! Successfully Sent.');
        } catch (\Exception $exception) {
            return redirect(url('/contact'))->with('warning', 'Error! Please try again later.');
        }
    
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
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
