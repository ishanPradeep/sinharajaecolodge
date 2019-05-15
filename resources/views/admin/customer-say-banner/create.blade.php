@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
@stop

@section('page_header')
@stop

@section('content')
    <h1 class="page-title">
        <i class="glyphicon glyphicon-glass"></i> Customer Say Banner
    </h1>
    <div class="page-content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="alert-type">
                    {{$success}}
                </div>
                <div class="panel panel-bordered">
                    
                    <form action="{{ route('voyager.customer-says.store') }}" method="post" id="checkout-form" enctype="multipart/form-data">
                    {{ csrf_field() }}
                       

                    <div class="panel-body">
                        <div class="form-group col-md-12" data-aos="">
                            <label class="awesome">Title</label>
                            <input type="text" name="title" value="{{old('title', $say->title)}}" placeholder="Title" class="form-control">
                            {!! $errors->first('title', '<span class="error-block">:message</span">') !!}
                        </div>
                        <div class="form-group col-md-12" data-aos="">
                             <label class="awesome">Description</label>
                             <textarea rows="4" cols="50" name="description" class="form-control">{{$say->description}}</textarea>

                            {!! $errors->first('description', '<span class="error-block">:message</span">') !!}
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