@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
@stop

@section('page_header')
@stop

@section('content')
    <h1 class="page-title">
        <i class="glyphicon glyphicon-glass"></i> Update Home Page Event
    </h1>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="alert-type">
                    {{$success}}
                </div>
                <div class="panel panel-bordered">
                    
                    <form action="{{ route('voyager.home-page-events.store') }}" method="post" id="checkout-form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        
                        <input type="hidden" name="image1" value="{{$event->image}}">
                       

                        <div class="panel-body">
                        <div class="form-group col-md-12" data-aos="">
                            <label class="awesome">Title</label>
                            <input type="text" name="title" value="{{old('title', $event->title)}}" placeholder="Title" class="form-control">
                            {!! $errors->first('title', '<span class="error-block">:message</span">') !!}
                        </div>
                        <div class="form-group col-md-12" data-aos="">
                             <label class="awesome">Description</label>
                             <textarea rows="4" cols="50" name="description" class="form-control">{{$event->description}}</textarea>

                            {!! $errors->first('description', '<span class="error-block">:message</span">') !!}
                        </div>
                        <div class="form-group col-md-6" data-aos="">
                             <label class="awesome">Background Image </label>
                            <input type="file" name="image" >
                            <small id="fileHelp" class="form-text text-muted">Size of image should not be more than 2MB.</small>

                            {!! $errors->first('image', '<span class="error-block">:message</span">') !!}

                            <br>
                            <img src="{{ asset('thumbnail/'.$event->image) }}" width="270" alt=" " class="img-fluid" />
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