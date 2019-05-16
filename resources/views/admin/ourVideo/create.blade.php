@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
@stop

@section('page_header')
@stop

@section('content')
    <h1 class="page-title">
        <i class="glyphicon glyphicon-glass"></i> Update Our Video
    </h1>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="alert-type">
                    {{$success}}
                </div>
                <div class="panel panel-bordered">
                    
                    <form action="{{ route('voyager.our-videos.store') }}" method="post" id="checkout-form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        
                        <input type="hidden" name="video_two" value="{{$ourVideo->video1}}">
                        <input type="hidden" name="video_three" value="{{$ourVideo->video2}}">
                        <input type="hidden" name="video_one" value="{{$ourVideo->video3}}">


                        <div class="panel-body">
                        <div class="form-group col-md-12" data-aos="">
                            <label class="awesome">Title</label>
                            <input type="text" name="title" value="{{old('title', $ourVideo->title)}}" placeholder="Title" class="form-control">
                            {!! $errors->first('title', '<span class="error-block">:message</span">') !!}
                        </div>
                        <div class="form-group col-md-12" data-aos="">
                             <label class="awesome">Description</label>
                             <textarea rows="4" cols="50" name="description" class="form-control">{{$ourVideo->description}}</textarea>

                            {!! $errors->first('description', '<span class="error-block">:message</span">') !!}
                        </div>
                        <div class="form-group col-md-6" data-aos="">
                             <label class="awesome">Our Video </label>
                            <input type="file" name="video1" id="video1">

                            {!! $errors->first('video1', '<span class="error-block">:message</span">') !!}

                            <br>
                            <video controls width="450">
                                 <source src="{{ asset('thumbnail/'.$ourVideo->video1)}}"
                                        type="video/webm">
                                <source src="{{ asset('thumbnail/'.$ourVideo->video1)}}"
                                        type="video/mp4">
                            </video>


                        </div>
                        


                        <div class="form-group col-md-6" data-aos="">
                             <label class="awesome">Our Video</label>
                            <input type="file" name="video2">

                            {!! $errors->first('video2', '<span class="error-block">:message</span">') !!}
                            <br>
                            <video controls width="450">
                                 <source src="{{ asset('thumbnail/'.$ourVideo->video2)}}"
                                        type="video/webm">
                                <source src="{{ asset('thumbnail/'.$ourVideo->video2)}}"
                                        type="video/mp4">
                            </video>
                        </div>



                        <div class="form-group col-md-12" data-aos="">
                             <label class="awesome">Our Video</label>
                            <input type="file" name="video3">
                            {!! $errors->first('video3', '<span class="error-block">:message</span">') !!}
                                <br>
                            <video controls width="450">
                                 <source src="{{ asset('thumbnail/'.$ourVideo->video3)}}"
                                        type="video/webm">
                                <source src="{{ asset('thumbnail/'.$ourVideo->video3)}}"
                                        type="video/mp4">
                            </video>

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