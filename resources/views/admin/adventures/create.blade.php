@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
@stop

@section('page_header')
@stop

@section('content')
    <h1 class="page-title">
        <i class="glyphicon glyphicon-glass"></i> Update Adventure
    </h1>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="alert-type">
                    {{$success}}
                </div>
                <div class="panel panel-bordered">
                    
                    <form action="{{ route('voyager.adventures.store') }}" method="post" id="checkout-form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        
                        <input type="hidden" name="image_two" value="{{$adventures->image1}}">
                        <input type="hidden" name="image_three" value="{{$adventures->image2}}">
                        <input type="hidden" name="image_one" value="{{$adventures->image3}}">


                        <div class="panel-body">
                        <div class="form-group col-md-12" data-aos="">
                            <label class="awesome">Title</label>
                            <input type="text" name="title" value="{{old('title', $adventures->title)}}" placeholder="Title" class="form-control">
                            {!! $errors->first('title', '<span class="error-block">:message</span">') !!}
                        </div>
                        <div class="form-group col-md-12" data-aos="">
                             <label class="awesome">Description</label>
                             <textarea rows="4" cols="50" name="description" class="form-control">{{$adventures->description}}</textarea>

                            {!! $errors->first('description', '<span class="error-block">:message</span">') !!}
                        </div>
                        <div class="form-group col-md-6" data-aos="">
                             <label class="awesome">Adventure Image </label>
                            <input type="file" name="image1" id="image1">
                            <small id="fileHelp" class="form-text text-muted">Size of image should not be more than 2MB.</small>

                            {!! $errors->first('image1', '<span class="error-block">:message</span">') !!}

                            <br>
                            <img src="{{ asset('thumbnail/'.$adventures->image1) }}" width="270" alt=" " class="img-fluid" />
                        </div>
                        


                        <div class="form-group col-md-6" data-aos="">
                             <label class="awesome">Adventure Image</label>
                            <input type="file" name="image2">
                            <small id="fileHelp" class="form-text text-muted">Size of image should not be more than 2MB.</small>

                            {!! $errors->first('image2', '<span class="error-block">:message</span">') !!}
                            <br>
                            <img src="{{ asset('thumbnail/'.$adventures->image2) }}" width="270" alt=" " class="img-fluid" />
                        </div>



                        <div class="form-group col-md-12" data-aos="">
                             <label class="awesome">Adventure Image</label>
                            <input type="file" name="image3">
                            <small id="fileHelp" class="form-text text-muted">Size of image should not be more than 2MB.</small>
                            {!! $errors->first('image3', '<span class="error-block">:message</span">') !!}
                                <br>
                            <img src="{{ asset('thumbnail/'.$adventures->image3) }}" width="270" alt=" " class="img-fluid" />

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