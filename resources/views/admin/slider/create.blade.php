@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
@stop

@section('page_header')
@stop

@section('content')
    <h1 class="page-title">
        <i class="glyphicon glyphicon-glass"></i>Update Sliders
    </h1>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="alert-type">
                        {{$success}}
                </div>
                <div class="panel panel-bordered">
                   
                    <form action="{{ route('voyager.sliders.store') }}" method="post" id="checkout-form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="back_image_one" value="{{$slider->back_image1}}">
                    <input type="hidden" name="back_image_two" value="{{$slider->back_image2}}">
                    <input type="hidden" name="back_image_three" value="{{$slider->back_image3}}">
                    <input type="hidden" name="logo_image1" value="{{$slider->logo_image}}">

                    <div class="panel-body">
                        <div class="form-group col-md-6" data-aos="">
                            <label class="awesome">Slider Image</label>
                            <input type="file" name="back_image1" value="{{old('back_image1', $slider->back_image1)}}" placeholder="Name">
                                <small id="fileHelp" class="form-text text-muted">Size of image should not be more than 4MB.</small>

                            <p>{!! $errors->first('back_image1', '<span class="error-block">:message</span">') !!}</p>
                            <br>
                            <img src="{{ old('back_image1', asset('slider/'.$slider->back_image1)) }}" width="270" height="300"  alt=" " class="img-fluid" />
                        </div>

                        <div class="form-group col-md-6" data-aos="">
                             <label class="awesome">Slider Image</label>
                            <input type="file" name="back_image2" value="{{old('back_image2', $slider->back_image2)}}" >
                            <small id="fileHelp" class="form-text text-muted">Size of image should not be more than 4MB.</small>

                            <p>{!! $errors->first('back_image2', '<span class="error-block">:message</span">') !!}</p>
                            <br>

                            <img src="{{ old('back_image2', asset('slider/'.$slider->back_image2)) }}" width="270" height="300" alt=" " class="img-fluid" />
                        </div>

                        <div class="form-group col-md-6" data-aos="">
                             <label class="awesome">Slider Image</label>
                            <input type="file" value="{{old('back_image3', $slider->back_image3)}}" name="back_image3" >
                            <small id="fileHelp" class="form-text text-muted">Size of image should not be more than 4MB.</small>

                            <p>{!! $errors->first('back_image3', '<span class="error-block">:message</span">') !!}</p>
                                <br>
                            <img src="{{ old('back_image3', asset('slider/'.$slider->back_image3)) }}" width="270" height="300" alt=" " class="img-fluid" />
                        </div>
                      
                        <div class="form-group col-md-6" data-aos="">
                            <label class="awesome">Logo Image</label>
                            <input type="file" name="logo_image" value="{{old('logo_image', $slider->logo_image)}}" placeholder="Country"  class="">
                                <small id="fileHelp" class="form-text text-muted">Size of image should not be more than 4MB.</small>
                                <p>
                                    {!! $errors->first('logo_image', '<span class="error-block">:message</span">') !!}
                                </p>
                                <br>
                            <img src="{{ old('logo_image', asset('slider/'.$slider->logo_image)) }}" width="270" height="300" alt=" " class="img-fluid" />
                        </div>
                       
                        <div class="form-group col-md-12" data-aos="">
                             <label class="awesome">Banner Header</label>
                            <input type="text" name="banner_header" value="{{old('banner_header', $slider->banner_header)}}" required="" placeholder="Country" class="form-control">
                            <p>{!! $errors->first('banner_header', '<span class="error-block">:message</span">') !!}</p>
                        </div>
                         <div class="form-group col-md-12" data-aos="">
                             <label class="awesome">Banner Info1</label>
                            <input type="text" name="banner_info_title" value="{{old('banner_info_title', $slider->banner_info_title)}}" required="" class="form-control">
                            <p>{!! $errors->first('banner_info_title', '<span class="error-block">:message</span">') !!}</p>
                        </div>

                        
                        <div class="form-group col-md-12" data-aos="">
                             <label class="awesome">Banner Info Title</label>
                            <input type="text" name="banner_info1" required="" value="{{old('banner_info1', $slider->banner_info1)}}" class="form-control">
                            <p>{!! $errors->first('banner_info1', '<span class="error-block">:message</span">') !!}</p>
                        </div>


                        <div class="form-group col-md-12" data-aos="">
                             <label class="awesome">Link For Facebook</label>
                            <input type="text" name="link_for_facebook" value="{{old('link_for_facebook', $slider->link_for_facebook)}}" required=""class="form-control">
                            <p>{!! $errors->first('link_for_facebook', '<span class="error-block">:message</span">') !!}</p>
                        </div>
                        <div class="form-group col-md-12" data-aos="">
                             <label class="awesome">Link For Booking</label>
                            <input type="text" name="link_for_booking" value="{{old('link_for_booking', $slider->link_for_booking)}}" required=""class="form-control">
                            <p>{!! $errors->first('link_for_booking', '<span class="error-block">:message</span">') !!}</p>
                        </div>
                        <div class="form-group col-md-12" data-aos="">
                             <label class="awesome">Link For Tripadvisor</label>
                            <input type="text" name="link_for_tripadvisor" value="{{old('link_for_tripadvisor', $slider->link_for_tripadvisor)}}" required=""class="form-control">
                            <p>{!! $errors->first('link_for_tripadvisor', '<span class="error-block">:message</span">') !!}</p>
                        </div>
                        <div class="form-group col-md-12" data-aos="">
                             <label class="awesome">Link For Agoda</label>
                            <input type="text" name="link_for_agoda" required="" value="{{old('link_for_agoda', $slider->link_for_agoda)}}" class="form-control">
                            <p>{!! $errors->first('link_for_agoda', '<span class="error-block">:message</span">') !!}</p>
                        </div>
                        <div class="form-group col-md-12" data-aos="">
                             <label class="awesome">Link For Book Now</label>
                            <input type="text" name="link_for_book_now" value="{{old('link_for_book_now', $slider->link_for_book_now)}}" required="" class="form-control">
                            <p>{!! $errors->first('link_for_book_now', '<span class="error-block">:message</span">') !!}</p>
                        </div>
                        <div class="form-group col-md-12" data-aos="">
                             <label class="awesome">Contact Number1</label>
                            <input type="text" name="contact_number1" value="{{old('contact_number1', $slider->contact_number1)}}" required="" class="form-control">
                            <p>{!! $errors->first('contact_number1', '<span class="error-block">:message</span">') !!}</p>
                        </div>
                        <div class="form-group col-md-12" data-aos="">
                             <label class="awesome">Contact Number2</label>
                            <input type="text" name="contact_number2" value="{{old('contact_number2', $slider->contact_number2)}}" required="" class="form-control">
                            <p>{!! $errors->first('contact_number2', '<span class="error-block">:message</span">') !!}</p>
                        </div>
                        <div class="form-group col-md-12" data-aos="">
                             <label class="awesome">Email</label>
                            <input type="text" name="email" required="" class="form-control" value="{{old('email', $slider->email)}}">
                            <p>{!! $errors->first('email', '<span class="error-block">:message</span">') !!}</p>
                        </div>
                        <div class="form-group col-md-12" data-aos="">
                             <label class="awesome">Address</label>
                            <input type="text" name="address" required="" class="form-control" value=" {{old('address', $slider->address)}}">
                            <p>{!! $errors->first('address', '<span class="error-block">:message</span">') !!}</p>
                        </div>

                       
                    </div>
                    <div class="panel-footer">
                        <input type="submit" class="btn btn-primary">
                    </div>

                    </form>
                    
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')
@stop